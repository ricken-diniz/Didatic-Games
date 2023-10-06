<?php

session_start();
#DATABASE
include __DIR__.'/database.php';

#MODELS
include __DIR__.'/Models/Usuarios.php';
include __DIR__.'/Models/Cards.php';
include __DIR__.'/Models/Sugestões.php';
include __DIR__.'/Models/Avaliações.php';
include __DIR__.'/Models/Progressos.php';
include __DIR__.'/Models/Administradores.php';
include __DIR__.'/Models/Desenvolvedores.php';

#SETTINGS
include __DIR__.'/auth.php';
include __DIR__.'/Route.php';
include __DIR__.'/App.php';
include __DIR__.'/web.php';
include __DIR__.'/adms.php';

// Primeiro tratamento e redirecionamento, para página inicial
$app = new App();
$app->dispatch();
?>