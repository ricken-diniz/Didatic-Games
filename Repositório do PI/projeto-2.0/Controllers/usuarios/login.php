<?php
if (hasUser()) {
    header("Location: /perfil");
}

if (isset($_POST['email'], $_POST['senha'])) {

    $email = $_POST['email'];
    $password = $_POST['senha'];

    $model = new Usuario(connection());    
    $data = $model->findOnly('EMAIL',$email);   

    if ($data && password_verify($password, $data['usu_senha'])) {
        $_SESSION['user'] = $data['usu_nome'];
        $_SESSION['id'] = $data['usu_id'];
        header('Location: /perfil');
    } else {
        header('Location: /login');
    }
} else {
    header('Location: /login');
}