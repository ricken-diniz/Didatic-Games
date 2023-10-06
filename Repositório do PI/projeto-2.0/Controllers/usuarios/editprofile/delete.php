<?php
if(!hasUser()){
    header('Location: /');
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $model = new Usuario(connection());    
    $data = $model->findOnly('ID',$id);

    if ($data) {
        $model->delete($id);
        logout();
        header('Location: /');
    } else {
        header('Location: /');
    }
}