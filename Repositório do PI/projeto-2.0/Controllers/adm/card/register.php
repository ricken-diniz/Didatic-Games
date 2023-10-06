<?php
if (!hasAdm()) {
    header('Location: /');
}
if (isset($_POST['titulo'], $_POST['resumo'], $_POST['acessibilidade'], $_POST['necessidade'], $_POST['classificação'], $_POST['plataforma'], $_POST['link'])) {
    
    $titulo = $_POST['titulo'];
    $resumo = $_POST['resumo'];
    $acessibilidade = $_POST['acessibilidade'];
    $necessidade = $_POST['necessidade'];
    $classificação = $_POST['classificação'];
    $plataforma = $_POST['plataforma'];
    $link = $_POST['link'];

    $model = new Card(connection());    
     
    if ($model->save($titulo, $resumo, $acessibilidade,$necessidade,$classificação,$plataforma,$link)) {
        header('Location: /admin/dashboard');
    } else {
        header('Location: /admin/dashboard');
    }
}