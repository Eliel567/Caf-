<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;



class ProdutoController extends Controller
{

    public function index()
    {
      $produto= produto::all();
      return view('paginacardapio');
    }
}
