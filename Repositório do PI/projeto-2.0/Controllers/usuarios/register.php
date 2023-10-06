<?php
if (hasUser()) {
    header('Location: /perfil');
}

if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
    
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];

    $model = new Usuario(connection());    
    $data = $model->findOnly('EMAIL',$email);

    if ($data && password_verify($password, $data['usu_senha'])) {
        $_SESSION['user'] = $data['usu_nome'];
        $_SESSION['id'] = $data['usu_id'];
        header('Location: /perfil');
    } else {

        //usa função save() presente no arquivo database.php        
        if ($model->save($name, $email, $password)) {
            $data2 = $model->findOnly('EMAIL',$email);
            $_SESSION['user'] = $data2['usu_nome'];
            $_SESSION['id'] = $data2['usu_id'];
            header('Location: /perfil');
        } else {
            header('Location: /registrar');
        }

        
    }

}