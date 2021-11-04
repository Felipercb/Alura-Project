@extends('layout')
@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
<form method="post">
    @csrf
    <div class="form-group">
        <label for="nome" class="text-light">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

        <button class="btn btn-light mt-2 mb-2">Adicionar</button>
</form>
@endsection