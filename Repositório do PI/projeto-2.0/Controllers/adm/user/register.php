<?php
if (!hasAdm()) {
    header('Location: /');
}
if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
    
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];

    $model = new Usuario(connection());    
    $data = $model->findOnly('EMAIL',$email);

    if ($data) {
        header('Location: /admin/dashboard');
    } else {

        //usa função save() presente no arquivo database.php        
        if ($model->save($name, $email, $password)) {
            header('Location: /admin/dashboard');
        } else {
            header('Location: /admin/dashboard');
        }

        
    }

}