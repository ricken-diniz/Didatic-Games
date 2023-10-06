<?php
if (!hasAdm()) {
    header('Location: /');
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $model = new Progresso(connection());    
    $data = $model->findOnly('ID',$id);

    if ($data) {
        $model->validate($id);
        header('Location: /admin/dashboard');
    } else {
        header('Location: /admin/dashboard');
    }
}