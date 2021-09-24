@extends('layout.app')

@section('title', 'Editar cadastro')

@section('content')
    <div class="container">
        <h1 class="mt-3">Editar cadastro</h1>
        <hr>
        <form action=" {{ route('jogos-update', ['id'=>$jogos->id]) }} " method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group mb-3">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" value="{{ $jogos->nome }}" placeholder="Digite o nome do jogo">
                </div>
                <div class="form-group mb-3">
                    <label for="descricao">Descrição:</label>
                    <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="10" placeholder="Insira a descrição do jogo (Criadores, anos de criação, gênero etc)">{{ $jogos->descricao }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="valor">Valor:</label>
                    <input type="number" name="valor" class="form-control" value="{{ $jogos->valor }}" placeholder="Informe o valor do jogo">
                </div>

                <div class="row">
                    <div class="col-sm-10">
                        <input type="submit" name="submit" class="btn btn-primary" value="Atualizar">
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('jogos-index') }}" class="btn btn-danger">Voltar</a>
                    </div>
                 </div>
            </div>
        </form>
    </div>
@endsection