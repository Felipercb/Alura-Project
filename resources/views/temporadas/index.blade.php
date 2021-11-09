@extends('layout')
@section('cabecalho')
    Temporadas de {{ $serie->nome }}
@endsection

@section('conteudo')

    <ul class="list-group">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item d-flex justify-content-between align-items-center bg-secondary">
                <a class="text-dark" href="/temporadas/{{ $temporada->id }}/episodios">
                    Temporada {{ $temporada->numero }}
                </a>
                
                <span class="text-white fw-bold">
                    {{ $temporada->getEpisodiosAssistidos()->count() }} / {{$temporada->episodios->count() }}
                </span>
            
            </li>
        @endforeach
    </ul>

@endsection