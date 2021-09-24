@extends('layout.app')

@section('title', 'Cadastro de jogos')

@section('content')
    <div class="container">
        <h1 class="mt-3">Cadastro de jogos</h1>
        <hr>
        <form action=" {{ route('jogos-store') }} " method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group mb-3">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite o nome do jogo">
                </div>
                <div class="form-group mb-3">
                    <label for="descricao">Descrição:</label>
                    <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="10" placeholder="Insira a descrição do jogo (Criadores, anos de criação, gênero etc)"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="valor">Valor:</label>
                    <input type="number" step=".01" name="valor" class="form-control" placeholder="Informe o valor do jogo">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-10">
                            <input type="submit" name="submit" class="btn btn-primary" value="Cadastrar">
                        </div>
                        <div class="col-sm-2">
                            <a href="{{ route('jogos-index') }}" class="btn btn-danger">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection