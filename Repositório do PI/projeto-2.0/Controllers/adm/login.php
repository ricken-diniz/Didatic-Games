<?php
if (hasAdm()) {
    include __DIR__.'/../../Views/adm/dashboard.php';
}
if (isset($_POST['email'], $_POST['senha'])) {

    $email = $_POST['email'];
    $password = $_POST['senha'];

    $model = new Administrador(connection());    
    $data = $model->findOnly('EMAIL',$email);   

    if ($data && $password==$data['adm_senha']) {
        $_SESSION['admin'] = $email;
        header('Location: /admin/dashboard');
    } else {
        header('Location: /admin');
    }
} else {
    header('Location: /admin');
}