<?php 

class Usuario{

    protected $conn;

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    // FINDS. 
    # Recebe todas informações de um usuário, a partir de um de seus atributos
    public function findOnly (string $atributo, $argumento){
        if ($atributo == 'ID') {
            $query = "SELECT * FROM tb_usuarios WHERE usu_id=:id";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":id", $argumento);
            $result = $sttm->execute();
            return $sttm->fetch();
        }
        elseif ($atributo == 'EMAIL') {
            $query = "SELECT * FROM tb_usuarios WHERE usu_email=:email";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(":email", $argumento);
            $result = $sttm->execute();
            return $sttm->fetch();
        } 
    }
    public function findAll(){
        $sttm = $this->conn->prepare("SELECT * FROM tb_usuarios");
        $result = $sttm->execute();
        return $sttm->fetchAll();
    }

    //CRUD.
    #salvar.
    public function save(string $nome, string $email, string $senha){
        $query = "INSERT INTO tb_usuarios (usu_nome, usu_email, usu_senha) VALUES (:nome,:email,:senha)";
        $sttm = $this->conn->prepare($query);

        $sttm->bindValue(":nome", $nome);
        $sttm->bindValue(":email", $email);
        $sttm->bindValue(":senha", password_hash($senha, PASSWORD_ARGON2I));
        $result = $sttm->execute();
        return $result;
    }

    #editar.
    public function edit(string $atributo, $argumento, int $id){
        if ($atributo=='usu_senha') {
            $query = "UPDATE tb_usuarios SET $atributo = :argumento WHERE usu_id = :id";
            $sttm = $this->conn->prepare($query);
    
            $sttm->bindValue(":argumento", password_hash($argumento, PASSWORD_ARGON2I));
            $sttm->bindValue(":id", $id);
            $result = $sttm->execute();
            return $result;
        }else{
            $query = "UPDATE tb_usuarios SET $atributo = :argumento WHERE usu_id = :id";
            $sttm = $this->conn->prepare($query);
    
            $sttm->bindValue(":argumento", $argumento);
            $sttm->bindValue(":id", $id);
            $result = $sttm->execute();
            return $result;
        }

    }

    #excluir.
    public function delete(int $id){
        $sttm = $this->conn->prepare("DELETE FROM tb_usuarios WHERE usu_id = :id");

        $sttm->bindValue(":id", $id);
        $result = $sttm->execute();
        return $result;
    }

}