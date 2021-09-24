<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function index(){
       $jogos = Jogo::all(); 
       //dd($jogos);
       return view('jogos.index', ['jogos'=>$jogos]);
    }

    public function create(){
        return view('jogos.cadastro');
    }

    public function store(Request $request){
        Jogo::create($request->all());
        return redirect()-> route('jogos-index');
    }

    public function edit($id){
        $jogos = Jogo::where('id', $id)->first();
        if(!empty($jogos)){
            return view('jogos.editar-cadastro', ['jogos'=>$jogos]);
        }
        else {
            return redirect()-> route('jogos-index');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
        ];
        Jogo::where('id', $id)->update($data);
        return redirect()-> route('jogos-index');
    }

    public function destroy($id){
        Jogo::where('id', $id)->delete();
        return redirect()-> route('jogos-index');
    }

    public function search($nome){
        return Jogo::where("nome","like","%".$nome."%")->get();
    }
}
