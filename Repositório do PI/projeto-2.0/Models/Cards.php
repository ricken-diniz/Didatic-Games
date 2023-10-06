<?php 

class Card{

    protected $conn;

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    // FINDS.
    public function findOnly (string $atributo, $argumento){
        if ($atributo == 'ID') {
            $query = "SELECT * FROM tb_cards WHERE car_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetchAll();
        }
    }
    public function findAll(){
        $sttm = $this->conn->prepare("SELECT * FROM tb_cards");
        $result = $sttm->execute();
        return $sttm->fetchAll();
    }
    public function findEvaluation($id){
        $query = "SELECT avg(ava_nota) FROM tb_avaliacoes JOIN tb_cards on ava_car_id = car_id WHERE car_id = $id";
        $sttm = $this->conn->prepare($query);
        $result = $sttm->execute();
        return $sttm->fetch();
    }

    //CRUD.
    #salvar.
    public function save(string $titulo, string $resumo, string $acessibilidade,string $necessidade,string $classificação,string $plataforma,string $link){
        $query = "INSERT INTO tb_cards (car_titulo, car_resumo, car_acessibilidade,car_necessidade,car_classificacao,car_plataforma,car_link) values(:titulo,:resumo,:acessibilidade,:necessidade,:classificacao,:plataforma,:link)";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":titulo", $titulo);
        $sttm->bindValue(":resumo", $resumo);
        $sttm->bindValue(":acessibilidade", $acessibilidade);
        $sttm->bindValue(":necessidade", $necessidade);
        $sttm->bindValue(":classificacao", $classificação);
        $sttm->bindValue(":plataforma", $plataforma);
        $sttm->bindValue(":link", $link);
        return $sttm->execute();
    }

    #editar.
    public function edit(string $atributo, $argumento, int $id){
        $query = "UPDATE tb_cards SET $atributo = :argumento WHERE car_id = :id";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":argumento", $argumento);
        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

    #excluir.
    public function delete(int $id){
        $sttm = $this->conn->prepare("DELETE FROM tb_cards WHERE car_id = :id");

        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

}