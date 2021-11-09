@extends('layout')
@section('cabecalho')
    Entrar
@endsection

@section('conteudo')
@include('errors', ['errors' => $errors])

<form method="post">
    @csrf
    <div class="form-group">
        <label class="text-white" for="email">E-mail</label>
   <input type="email" name="email" id="email" required class="form-control">
    </div>

    <div class="form-group">
        <label class="text-white" for="password">Senha</label>
        <input type="password" name="password" id="password" required min="1" class="form-control">
    </div>

    <div class="d-flex justify-content-between align-items-center">
    <button type="submit" class="btn btn-outline-light btn-danger mt-3">
        Entrar
    </button>

    <a href="/registrar" class="btn btn-outline-light btn-danger mt-3 btn-sm">
        Registrar-se
    </a>
    </div>
</form>
@endsection