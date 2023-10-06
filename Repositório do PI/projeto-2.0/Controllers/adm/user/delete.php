<?php
if (!hasAdm()) {
    header('Location: /');
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $model = new Usuario(connection());    
    $data = $model->findOnly('ID',$id);

    if ($data) {
        $model->delete($id);
        if($id==$_SESSION['id']){
            logout();
        }
        header('Location: /admin/dashboard');
    } else {
        header('Location: /admin/dashboard');
    }
}