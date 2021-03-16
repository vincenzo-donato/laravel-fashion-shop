{{-- SEZIONE MAIN PRODOTTI  --}}
@extends('layouts.app')

{{-- SEZIONE PRODOTTI TITLE --}}
@section('title','sezione-Prodotti')

{{-- SEZIONE PRODOTTI STRUCTURE  --}}
@section('content')

<h2>Prodotti</h2>

    {{-- BOX GENERAL PRODOTTI  --}}
    <div class="box-prodotti">

        {{-- PRIMO CICLO PER TUTTI PRODOTTI  --}}
        @foreach ($marca as $k => $item)

        {{-- STAMPO LA CHIAVE = MARCA DI OGNI PRODOTTO  --}}
        <h2>{{ $k }}</h2>

        {{-- BOX CONTAINER PRODOTTI  --}}
        <div class="box-container">

            {{--SECONDO CICLO PER OGNI PRODOTTO  --}}
            @foreach ($item as $i)
            
            {{-- BOX PRODOTTO  --}}
            <div class="box-prodotto">
                <p>{{ $i -> tipo }}</p>
                <p>{{ $i -> marca }}</p>
                <p>{{ $i -> modello }}</p>
                <p>{{ $i -> taglia }}</p>
            </div>
            {{--END BOX PRODOTTO  --}}

            @endforeach
            {{--END SECONDO CICLO PER OGNI PRODOTTO  --}}

        </div>
        {{--END BOX CONTAINER PRODOTTI  --}}
            
        @endforeach
        {{--END PRIMO CICLO PER TUTTI PRODOTTI  --}}

    </div>
    {{--END BOX GENERAL PRODOTTI  --}}

@endsection    