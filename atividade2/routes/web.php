<?php

use Illuminate\Support\Facades\Route;

// questão 5:

// Erro: Falta de importação do PaginaController.
// Explicação: O 'use' informa ao PHP onde encontrar a classe PaginaController (namespace), caso contrário o Laravel tenta procurar na raiz e falha.
// Correção: Importação adicionada abaixo.
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});


// Questão 1:
// Erro: O controller não existia e havia erro de sintaxe.
// Correção: Controller criado e aspas corrigidas (Corrigido em todas as outras rotas).
Route::get('/sobre', [PaginaController::class, 'sobre']);

// Rota auxiliar para testar a importação da Atividade 5
Route::get('/contato', [PaginaController::class, 'contato']);

// Questão 6:
// Erro: A rota define o parâmetro '{id}', mas o método no controller não estava preparado para recebê-lo, fazendo com que o dado da URL fosse perdido.
// Correção: Método 'usuario' ajustado no controller para receber $id.
Route::get('/usuario/{id}', [PaginaController::class, 'usuario']);

// Questão 7:
// Teste: /produto/novo: Retornava "Produto novo" (tratando 'novo' como ID).
// Explicação: A rota com parâmetro '{id}' estava vindo antes. Como '{id}' é um coringa, ele capturava a palavra "novo" antes que a rota específica fosse lida.
// Correção: Inverti a ordem. Rotas específicas devem vir antes de rotas dinâmicas.

Route::get('/produto/novo', function () {
    return "Novo Produto";
});

Route::get('/produto/{id}', function ($id) {
    return "Produto $id";
});

// Questão 8:
// Erro: O navegador exibe erro "Method Not Allowed".
// Explicação: A rota foi definida como POST, mas ao acessar via URL pelo navegador, a requisição é sempre do tipo GET.
// Correção: Alterado de Route::post para Route::get.
Route::get('/servicos', function () {
    return "Serviços";
});

// questão 10:
// Explicação: Será executada a rota que retorna "Blog 2".
// Justificativa: O Laravel lê o arquivo de cima para baixo. Se existem duas rotas iguais, a última definição sobrescreve a primeira.
// Solução: Alterei o URI da segunda rota para evitar conflito.
Route::get('/blog', function () {
    return "Blog 1";
});

Route::get('/blog2', function () {
    return "Blog 2";
});