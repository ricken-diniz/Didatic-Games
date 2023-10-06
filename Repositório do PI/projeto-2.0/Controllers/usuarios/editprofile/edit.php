<?php
if(!hasUser()){
    header('Location: /');
}
if (isset($_POST['argumento'], $_POST['atributo'], $_POST['id'])) {
    
    $atributo = $_POST['atributo'];
    $argumento = $_POST['argumento'];
    $id = $_POST['id'];

    $model = new Usuario(connection());    
    $data = $model->findOnly('ID',$id);

    if ($data) {
        if ($model->edit($atributo, $argumento, $id)) {
            if ($atributo=='usu_nome') {
                unset($_SESSION['user']);
                $_SESSION['user'] = $argumento;
            }
            header('Location: /perfil');
        } else {
            header('Location: /perfil');
        }
    }else{
        header('Location: /perfil');
    }
}