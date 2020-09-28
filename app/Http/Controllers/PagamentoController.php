<?php

namespace App\Http\Controllers;

use App\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller{

  public function index(){

    $pagamenti = Pagamento::all();
    return view('pagamenti', compact('pagamenti'));
  }
}
