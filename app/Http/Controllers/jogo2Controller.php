<?php

namespace App\Http\Controllers;

use App\Models\Jogo as Jogo;
use App\Http\Resources\Jogo as JogoResource;
use Illuminate\Http\Request;

class jogo2Controller extends Controller
{ 
  public function index(){
    $jogos = Jogo::paginate(15);
    return JogoResource::collection($jogos);
  }

  public function show($id){
    $jogos = Jogo::findOrFail( $id );
    return new JogoResource( $jogos );
  }
}
