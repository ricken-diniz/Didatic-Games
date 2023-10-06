<?php 

class Progresso{

    protected $conn;

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    // FINDS.
    # Recebe todas informações de um usuário, a partir de um de seus atributos
    public function findOnly (string $atributo, $argumento){
        if ($atributo == 'USU_ID') {
            $query = "SELECT * FROM tb_progressos JOIN tb_cards on pro_car_id = car_id WHERE pro_usu_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetchAll();
        }
        elseif ($atributo == 'CAR_ID') {
            $query = "SELECT * FROM tb_progressos JOIN tb_usuarios on pro_usu_id = usu_id WHERE pro_car_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetchAll();
        }
        elseif ($atributo == 'ID') {
            $query = "SELECT * FROM tb_progressos WHERE pro_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetchAll();
        }
    }
    public function findAll(){
        $sttm = $this->conn->prepare("SELECT * FROM tb_progressos JOIN tb_usuarios on pro_usu_id = usu_id JOIN tb_cards on pro_car_id = car_id");
        $result = $sttm->execute();
        return $sttm->fetchAll();
    }

    //CRUD.
    #salvar.
    public function save(string $descricao, int $usu_id, int $car_id){
        $query = "INSERT INTO tb_progressos ('pro_descricao','pro_validacao', 'pro_usu_id', 'pro_car_id') " . "values(:descrição,false,:usu_id,:car_id)";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":descrição", $descricao);
        $sttm->bindValue(":usu_id", $usu_id);
        $sttm->bindValue(":car_id", $car_id);
        $result = $sttm->execute();
        return $result;
    }

    #editar.
    public function edit(string $atributo, $argumento, int $id){
        $query = "UPDATE tb_progressos SET $atributo = :argumento WHERE pro_id = :id";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":argumento", $argumento);
        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }
    public function validate(int $id){
        $query = "UPDATE tb_progressos SET pro_validacao = true WHERE pro_id = :id";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

    #excluir.
    public function delete(int $id){
        $sttm = $this->conn->prepare("DELETE FROM tb_progressos WHERE pro_id = :id");

        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

}