<?php

namespace App\Http\Controllers;

use App\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller{

  public function index(){

    $pagamenti = Pagamento::all();

    return view('pagamenti', compact('pagamenti'));
  }

  public function delete($id){

    $pagamento = Pagamento::findOrFail($id);
    $pagamento -> delete();

    return redirect() -> route('pagamenti-index');
  }

  public function edit($id){

    $pagamento = Pagamento::findOrFail($id);

    return view('pagamento-update', compact('pagamento'));
  }

  public function update(Request $request, $id){

    $pagamento = Pagamento::findOrFail($id);
    $data = $request -> all();

    $pagamento -> update($data);

    return redirect() -> route('pagamenti-index');
  }
}
