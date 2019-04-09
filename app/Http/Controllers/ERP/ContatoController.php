<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contato;

class ContatoController extends Controller
{
   public function index(){
     $registros = Contato::all();
     return view('ERP.views.contato', compact('registros'));
   }

   public function novo(){
     return view('ERP.views.novo_contato');
   }

   public function salvar(Request $req){
     return redirect()->route('contatos.lista');
   }
}
