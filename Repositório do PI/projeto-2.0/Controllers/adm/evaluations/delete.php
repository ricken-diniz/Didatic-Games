<?php
if (!hasAdm()) {
    header('Location: /');
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $model = new Avaliação(connection());    
    $data = $model->findOnly('ID',$id);

    if ($data) {
        $model->delete($id);
        header('Location: /admin/dashboard');
    } else {
        header('Location: /admin/dashboard');
    }
}