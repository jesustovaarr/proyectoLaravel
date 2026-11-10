@extends('games.layout')

@section('contenido')
    <div class="row">
         @if ($existenJuegos)
            @foreach ($games as $juego)
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $juego['image'] }}" class="card-img-top" alt="{{ $juego['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $juego['name'] }}</h5>
                            <p class="card-text">Género: {{ $juego['genre'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
          @else
            <div class="col-md-12">
                <h1>Eres pobre</h1>
            </div>  
         @endif   
    </div>

@endsection
