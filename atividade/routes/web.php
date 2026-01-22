<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

// Questão 1
Route::get('/ola', function(){
    return 'Olá, Laravel!';
});

// Questão 2
Route::get('/curso/ads', function(){
    return 'Curso e Análise e Desenvolvimento de Sistemas';
});

// Questão 3
Route::get('/curso/web', function(){
    return 'Disciplina Programação Web I';
});

// Questão 4
Route::get('/sobre', function(){
    return view('sobre');
});

// Questão 5
Route::get('/contato', function(){
    return view('contato');
});

// Questão 6
Route::get('/instituicao/missao', function(){
    return view('instituicao/missao');
});

// Questão 7
Route::get('/empresa', [PaginaController::class, 'empresa']);

// Questão 8
Route::get('/service', [PaginaController::class, 'service']);

// Questão 9
Route::get('/blog', [PaginaController::class, 'blog']);
Route::get('/portfolio', [PaginaController::class, 'portfolio']);

// Questao 10
// Apareceu o erro: Call to undefined method App\Http\Controllers\PaginaController::equipe()
Route::get('/equipe', [PaginaController::class, 'equipe']);

// Questão 11
Route::get('/usuario/{nome}', function($nome){
        return "O nome do usuário é: ".$nome;
});

// Questão 12
// O id passa pela URL e com isso é acessado através do parâmetro na função do controller
Route::get('/produto/{id}', [PaginaController::class, 'produto']);