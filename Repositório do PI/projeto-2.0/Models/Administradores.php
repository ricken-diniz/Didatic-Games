<?php 

class Administrador{

    protected $conn;

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    // FINDS.
    # Recebe todas informações de um adm, a partir de um de seus atributos
    public function findOnly (string $atributo, $argumento){
        if ($atributo == 'ID') {
            $query = "SELECT * FROM tb_administradores WHERE adm_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetch();
        }
        elseif ($atributo == 'EMAIL') {
            $query = "SELECT * FROM tb_administradores WHERE adm_email=:email";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":email", $argumento);
            $result = $sttm->execute();
            return $sttm->fetch();
        } 
        elseif ($atributo == 'NOME') {
            $query = "SELECT * FROM tb_administradores WHERE adm_nome=:nome";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":nome", $argumento);
            $result = $sttm->execute();
            return $sttm->fetch();
        } 
    }
    public function findAll(){
        $sttm = $this->conn->prepare("SELECT * FROM tb_administradores");
        $result = $sttm->execute();
        return $sttm->fetch();
    }

    //CRUD
    #salvar.
    public function save(string $nome, string $email, string $senha) {
        $query = 'INSERT INTO tb_administradores (adm_nome, adm_email, adm_senha) VALUES (:nome,:email,:senha)';
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":nome", $nome);
        $sttm->bindValue(":email", $email);
        $sttm->bindValue(":senha", $senha);
        $result = $sttm->execute();
        return $result;
    }

    #editar.
    public static function edit(string $atributo, $argumento, int $id) : Administrador {
        $db_conn = self::$conn ?? connection();
        $query = "UPDATE tb_administradores SET :atributo = :argumento WHERE adm_id = :id";
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
        $sttm = $this->conn->prepare("DELETE FROM tb_administradores WHERE adm_id = :id");
        $sttm = $db_conn->prepare($query);

        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

}