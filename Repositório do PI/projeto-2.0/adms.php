<?php

$adm = new Administrador(connection());
if(!$adm->findOnly('NOME','ricken')){
    $adm->save('ricken','dinizricken@gmail.com','rick1234');
}
