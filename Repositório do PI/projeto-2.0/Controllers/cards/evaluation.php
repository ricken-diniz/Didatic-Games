<?php
if (!hasUser()) {
    header('Location: /login');
}

if (isset($_POST['car_id'], $_POST['usu_id'], $_POST['avaliacao'])) {
    

    $car_id = $_POST['car_id'];
    $usu_id = $_POST['usu_id'];
    $avaliacao = $_POST['avaliacao'];

    $model = new Avaliação(connection());   
    $data = $model->findEvaluation($car_id,$usu_id);
    
    if(!$data){
        if ($_POST['descricao']) {
            $descricao = $_POST['descricao'];
            $model->saveDescription($avaliacao,$descricao,$usu_id,$car_id);
            header('Location: /');
        } else {
            $model->save($avaliacao,$usu_id,$car_id);
            header('Location: /');
        }
    } else {
        header('Location: /');
    }
}