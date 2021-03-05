<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Clientes;

class ZeusController extends Controller
{
public function home () {
    return view ('pages.home');
}
public function produtos () {
    $lista_produtos = Produtos::listaProdutos();
    return view ('pages.produtos', compact('lista_produtos'));
    
    
}
public function servicos () {
    $lista_clientes = Clientes::listaClientes();
    return view ('pages.servicos', compact('lista_clientes'));
}
public function sobre() {
    return view ('pages.sobre');
}

}
