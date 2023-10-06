<?php 

class Avaliação{

    protected $conn;

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    // FINDS.
    public function findEvaluation ($car_id,$usu_id){
        if(isset($usu_id)){
            $query = "SELECT * FROM tb_avaliacoes WHERE ava_usu_id=$usu_id and ava_car_id=$car_id";
            $sttm = $this->conn->prepare($query);
            // $sttm->bindValue(":usu_id", $usu_id);
            // $sttm->bindValue(":car_id", $car_id);
            $result = $sttm->execute();
            return $sttm->fetch();
        } else {
            return null;
        }
        
    }
    public function findOnly (string $atributo, $argumento){
        if ($atributo == 'USU_ID') {
            $query = "SELECT * FROM tb_avaliacoes JOIN tb_usuarios on ava_usu_id = usu_id WHERE ava_usu_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetchAll();
        }
        elseif ($atributo == 'CAR_ID') {
            $query = "SELECT * FROM tb_avaliacoes JOIN tb_cards on ava_car_id = car_id WHERE ava_car_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetchAll();
        } 
        elseif ($atributo == 'ID') {
            $query = "SELECT * FROM tb_avaliacoes WHERE ava_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetchAll();
        } 
    }
    public function findAll(){
        $sttm = $this->conn->prepare("SELECT * FROM tb_avaliacoes JOIN tb_usuarios on ava_usu_id = usu_id JOIN tb_cards on ava_car_id = car_id");
        $result = $sttm->execute();
        return $sttm->fetchAll();
    }

    //CRUD
    #salvar.
    public function save(float $nota, int $usu_id,int $car_id){
        $query = "INSERT INTO tb_avaliacoes (ava_nota, ava_usu_id,ava_car_id) values(:nota,:usu_id,:car_id)";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":nota", $nota);
        $sttm->bindValue(":usu_id", $usu_id);
        $sttm->bindValue(":car_id", $car_id);
        $result = $sttm->execute();
        return $result;
    }
    public function saveDescription(float $nota, string $descricao, int $usu_id,int $car_id){
        $query = "INSERT INTO tb_avaliacoes (ava_nota, ava_descricao, ava_usu_id, ava_car_id) values(:nota,:descricao,:usu_id,:car_id)";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":nota", $nota);
        $sttm->bindValue(":descricao", $descricao);
        $sttm->bindValue(":usu_id", $usu_id);
        $sttm->bindValue(":car_id", $car_id);
        $result = $sttm->execute();
        return $result;
    }

    #editar.
    public function edit(string $atributo, $argumento, int $id){
        $query = "UPDATE tb_avaliacoes SET :atributo = :argumento WHERE ava_id = :id";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":atributo", $atributo);
        $sttm->bindValue(":argumento", $argumento);
        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

    #excluir.
    public function delete(int $id){
        $sttm = $this->conn->prepare("DELETE FROM tb_avaliacoes WHERE ava_id = :id");

        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

}