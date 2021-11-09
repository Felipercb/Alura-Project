@extends('layout')
@section('cabecalho')
    Episódios
@endsection

@section('conteudo')
    @include('mensagem', ['mensagem' => $mensagem])
    
    <form action="/temporadas/{{ $temporadaId }}/episodios/assistir" method="post">
        @csrf
        <ul class="list-group">
            @foreach ($episodios as $episodio)
            <li class="list-group-item d-flex justify-content-between align-items-center bg-secondary">
                Episódio {{ $episodio->numero }}
                @auth
                <input type="checkbox"
                       name="episodios[]" 
                       value="{{ $episodio->id }}"  
                       {{ $episodio->assistido ? 'checked' : ''}}>
                @endauth

            </li>
            @endforeach
            @guest
            <div class="container">
            <p class="text-danger mt-3">Para fazer alterações, faça o login clicando abaixo</p>
            <a href="/entrar" class="btn btn-danger" role="button">Entrar</a>
            </div>
            @endguest
        </ul>
        @auth
        <button class="btn btn-dark btn-outline-danger mb-2 btn-sm mt-2 ">Salvar</button>
        @endauth
        
    </form>

</div>
@endsection
