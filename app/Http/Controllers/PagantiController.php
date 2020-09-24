<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagantiController extends Controller{
  
  public function index(){
    return view('home');
  }
}
