<?php 

class Desenvolvedor{

    protected $conn;

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    // FINDS.
    # Recebe todas informações de um adm, a partir de um de seus atributos
    public function findOnly (string $atributo, $argumento){
        if ($atributo == 'ID') {
            $query = "SELECT * FROM tb_desenvolvedores WHERE des_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetch();
        } 
        elseif ($atributo == 'NOME') {
            $query = "SELECT * FROM tb_desenvolvedores WHERE des_nome=:nome";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":nome", $argumento);
            $result = $sttm->execute();
            return $sttm->fetch();
        } 
    }
    public function findAll(){
        $sttm = $this->conn->prepare("SELECT * FROM tb_desenvolvedores");
        $result = $sttm->execute();
        return $sttm->fetchAll();
    }

    //CRUD
    #salvar.
    public function save(string $nome, int $idade, string $endereco, string $descricao) {
        $query = 'INSERT INTO tb_desenvolvedores (des_nome, des_idade, des_endereco,des_descricao) VALUES (:nome,:idade,:endereco,:descricao)';
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":nome", $nome);
        $sttm->bindValue(":idade", $idade);
        $sttm->bindValue(":endereco", $endereco);
        $sttm->bindValue(":descricao", $descricao);
        $result = $sttm->execute();
        return $result;
    }

    #editar.
    public static function edit(string $atributo, $argumento, int $id) : Administrador {
        $db_conn = self::$conn ?? connection();
        $query = "UPDATE tb_desenvolvedores SET :atributo = :argumento WHERE des_id = :id";
        $sttm = $db_conn->prepare($query);

        $sttm->bindValue(":atributo", $atributo);
        $sttm->bindValue(":argumento", $argumento);
        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

    #excluir.
    public static function delete(int $id) : Administrador {
        $db_conn = self::$conn ?? connection();
        $sttm = $this->conn->prepare("DELETE FROM tb_desenvolvedores WHERE des_id = :id");
        $sttm = $db_conn->prepare($query);

        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

}