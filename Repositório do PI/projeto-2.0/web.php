<?php

Route::get('/','/Views/home.php','');
Route::get('/login','/Views/usuarios/login.html','');
Route::get('/registrar','/Views/usuarios/register.html','');
Route::get('/jogos','/Views/cards/jogos.php','');
Route::get('/sobre','/Views/sobre/sobre.php','');

Route::post('/users/login','/Controllers/usuarios/login.php','');
Route::post('/users/registrar','/Controllers/usuarios/register.php','');
Route::get('/sair','/Controllers/usuarios/logout.php','');
Route::get('/perfil','/Views/usuarios/dashboard.php','');

Route::get('/admin','/Views/adm/login.html','');
Route::post('/admin/login','/Controllers/adm/login.php','ADM');
Route::get('/admin/dashboard','/Views/adm/dashboard.php','ADM');
Route::post('/adm/users/registrar','/Controllers/adm/user/register.php','ADM');
Route::post('/adm/users/delete','/Controllers/adm/user/delete.php','ADM');
Route::post('/adm/cards/delete','/Controllers/adm/card/delete.php','ADM');
Route::post('/adm/cards/registrar','/Controllers/adm/card/register.php','ADM');
Route::post('/adm/cards/editar','/Controllers/adm/card/edit.php','ADM');
Route::post('/adm/evaluations/delete','/Controllers/adm/evaluations/delete.php','ADM');
Route::post('/adm/progress/delete','/Controllers/adm/progress/delete.php','ADM');
Route::post('/adm/progress/validate','/Controllers/adm/progress/validate.php','ADM');
Route::post('/adm/suggestions/delete','/Controllers/adm/suggestions/delete.php','ADM');
Route::post('/usuarios/editprofile/delete','/Controllers/usuarios/editprofile/delete.php','');
Route::post('/usuarios/editprofile/edit','/Controllers/usuarios/editprofile/edit.php','');
Route::post('/cards/evaluation','/Controllers/cards/evaluation.php','');
