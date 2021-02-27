<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;


class ZeusController extends Controller
{
public function home () {
    return view ('pages.home');
}
public function produtos () {
    $lista_produtos = Produtos::all();
    return view ('pages.produtos', compact('lista_produtos'));
}
public function servicos () {
    return view ('pages.servicos');
}
public function sobre() {
    return view ('pages.sobre');
}

}
