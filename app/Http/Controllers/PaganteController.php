<?php

namespace App\Http\Controllers;

use App\Pagante;
use Illuminate\Http\Request;

class PaganteController extends Controller{

  public function index(){
    $title = 'Paganti:';
    $paganti = Pagante::all();
    return view('paganti', compact('paganti', 'title'));
  }
}
