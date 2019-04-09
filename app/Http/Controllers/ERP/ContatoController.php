<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContatoController extends Controller
{
   public function index(){
     return view('ERP.views.contato');
   }

   public function novo(){
     Contato::all();
   }
}
