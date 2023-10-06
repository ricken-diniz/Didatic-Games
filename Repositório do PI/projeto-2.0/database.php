<?php

function connection() : PDO {
    return new PDO('mysql:dbname=pi;host=localhost:3307','root','usbw');
}
$connection = connection();

$data_querys = [
    // USUÁRIOS.
    'CREATE TABLE IF NOT EXISTS tb_usuarios(usu_id INTEGER PRIMARY KEY AUTO_INCREMENT,usu_nome VARCHAR(45) not null,usu_email VARCHAR(45) not null,usu_senha VARCHAR(300) not null)',
    // CARDS.
    'CREATE TABLE IF NOT EXISTS tb_cards(car_id INTEGER PRIMARY KEY AUTO_INCREMENT,car_titulo VARCHAR (45) not null, car_resumo VARCHAR (1000) not null, car_acessibilidade VARCHAR(45) not null, car_necessidade VARCHAR (45) not null, car_classificacao VARCHAR (45) not null, car_plataforma varchar (45) not null, car_link varchar (150) not null)',
    // AVALIAÇÕES.
    'CREATE TABLE IF NOT EXISTS tb_avaliacoes(ava_id INTEGER PRIMARY KEY AUTO_INCREMENT, ava_nota float not null, ava_descricao varchar(500), ava_usu_id integer not null, ava_car_id integer not null, FOREIGN KEY (ava_usu_id) REFERENCES tb_usuarios(usu_id), FOREIGN KEY (ava_car_id) REFERENCES tb_cards(car_id))',
    // SUGESTÕES.
    'CREATE TABLE IF NOT EXISTS tb_sugestoes(sug_id INTEGER PRIMARY KEY AUTO_INCREMENT, sug_descricao varchar(500) not null, sug_usu_id integer not null, FOREIGN KEY (sug_usu_id) REFERENCES tb_usuarios(usu_id))',
    // PROGRESSOS.
    'CREATE TABLE IF NOT EXISTS tb_progressos(pro_id INTEGER PRIMARY KEY AUTO_INCREMENT, pro_descricao varchar(500) not null, pro_validacao BOOLEAN not null, pro_usu_id integer not null, pro_car_id integer not null, FOREIGN KEY (pro_usu_id) REFERENCES tb_usuarios(usu_id), FOREIGN KEY (pro_car_id) REFERENCES tb_cards(car_id))',
    // ADMINISTRADORES.
    'CREATE TABLE IF NOT EXISTS tb_administradores(adm_id INTEGER PRIMARY KEY AUTO_INCREMENT,adm_nome VARCHAR(45) not null,adm_email VARCHAR(45) not null,adm_senha VARCHAR(300) not null)',
    // DESENVOLVEDORES.
    'CREATE TABLE IF NOT EXISTS tb_desenvolvedores(des_id INTEGER PRIMARY KEY AUTO_INCREMENT,des_nome VARCHAR(45) not null,des_idade int not null,des_endereco VARCHAR(45) not null,des_descricao VARCHAR(500) not null)'
];
foreach ($data_querys as $query) {
    $connection->prepare($query)->execute();
}
?>