<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function sobre()
    {
        // Questão 2:
        // Erro: O método sobre não existia.
        // Correção: Criação deste método público sobre.

        // Questão 3:
        // Erro: O método tentava retornar uma view que ainda não tinha arquivo criado em resources/views.
        // Correção: Arquivo criado.

        // Questão 4:
        // Erro: O arquivo foi criado como 'Sobre.blade.php', mas chamado como 'sobre'.
        // Correção: Arquivo renomeado para minúsculo.

        // Questão 9:
        // Erro: O Laravel busca na raiz da pasta views, mas o arquivo foi movido para a subpasta 'paginas'.
        // Correção: Atualizei o retorno usando a notação de ponto.
        return view('paginas/sobre');
    }

    // Método da questão 5
    public function contato()
    {
        return "Página de Contato";
    }

    // Questão 6:
    // Erro: O parâmetro {id} enviado pela rota não estava sendo capturado aqui.
    // Correção: foi adicionado ($id) no método.
    public function usuario($id)
    {
        return "Usuário: ".$id;
    }
}