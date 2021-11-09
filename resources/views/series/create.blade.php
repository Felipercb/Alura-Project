@extends('layout')
@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
@include('errors', ['errors' => $errors])

<form method="post">
    @csrf
    <div class="row">
        <div class="col col-8">
            <label for="nome" class="text-light">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="col col-2">
            <label for="qtd_temporadas" class="text-light">N° Temporadas</label>
            <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
        </div>

        <div class="col col-2">
            <label for="ep_por_temporada" class="text-light">N° Episódios</label>
            <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
        </div>
    </div>

        <button class="btn btn-dark btn-outline-danger mb-2 btn-sm mt-2">Adicionar</button>
</form>
@endsection