<?php

//criando um grupo
Route::group(['prefix' => 'painel'], function(){
  Route::get('/users', function () {
      return "Controle de usuarios";
  });
  Route::get('/financeiro', function () {
      return "Controle financeiros";
  });
  Route::get('/', function () {
      return "Minha Dashboard";
  });
});

//criando um grupo que só acessam os usuarios logados
Route::group(['prefix' => 'painel2', 'middleware' => 'auth'], function(){
  Route::get('/users2', function () {
      return "Controle de usuarios";
  });
  Route::get('/financeiro2', function () {
      return "Controle financeiros";
  });
  Route::get('/', function () {
      return "Minha Dashboard";
  });
});

Route::get('/login', function () {
    return "Faça o login filho da puta";
});

//passando parametro opcional na url nao sendo obrigatório
Route::get('/tipo2/{genero?}', function ($genero='viadinho') {
    return "Will é um {$genero}";
});

//passando parametro na url
Route::get('/tipo/{genero}', function ($genero) {
    return "Will é um {$genero}";
});

//retornado a pagina cu-do-will.blade.php
Route::get('/cu-do-will', function () {
    return view('cu-do-will');
});

Route::get('/', function () {
    return view('welcome');
});
