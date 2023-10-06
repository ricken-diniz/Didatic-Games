<?php
if (!hasAdm()) {
    header('Location: /');
}
if (isset($_POST['argumento'], $_POST['atributo'], $_POST['id'])) {
    
    $atributo = $_POST['atributo'];
    $argumento = $_POST['argumento'];
    $id = $_POST['id'];

    $model = new Card(connection());    
    $data = $model->findOnly('ID',$id);

    if ($data) {
        if ($model->edit($atributo, $argumento, $id)) {
            header('Location: /admin/dashboard');
        } else {
            header('Location: /admin/dashboard');
        }
    }else{
        header('Location: /admin/dashboard');
    }
}