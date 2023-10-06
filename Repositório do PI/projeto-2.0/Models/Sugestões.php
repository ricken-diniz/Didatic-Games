<?php 

class Sugestão{

    protected $conn;

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    // FINDS.
    public function findOnly (string $atributo, $argumento){
        if ($atributo == 'USU_ID') {
            $query = "SELECT * FROM tb_sugestoes WHERE sug_usu_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetchAll();
        } elseif ($atributo == 'ID') {
            $query = "SELECT * FROM tb_sugestoes WHERE sug_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetchAll();
        }
    }
    public function findAll(){
        $sttm = $this->conn->prepare("SELECT * FROM tb_sugestoes JOIN tb_usuarios on sug_usu_id = usu_id");
        $result = $sttm->execute();
        return $sttm->fetchAll();
    }

    //CRUD.
    #salvar.
    public function save(string $descricao, int $usu_id){
        $query = "INSERT INTO tb_sugestoes ('sug_descricao', 'sug_usu_id') " . "values(:descrição,:usu_id)";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":descrição", $descricao);
        $sttm->bindValue(":usu_id", $usu_id);
        $result = $sttm->execute();
        return $result;
    }

    #editar.
    public function edit(string $atributo, $argumento, int $id){
        $query = "UPDATE tb_sugestoes SET :atributo = :argumento WHERE sug_id = :id";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":atributo", $atributo);
        $sttm->bindValue(":argumento", $argumento);
        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

    #excluir.
    public function delete(int $id){
        $sttm = $this->conn->prepare("DELETE FROM tb_sugestoes WHERE sug_id = :id");

        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

}