@extends('layouts.app')


@section('titoloPagina', 'Prodotti')

@section('content')
    <h1>I nostri prodotti</h1>
    <p>Ecco le nostre paste</p>

    <div class="card_container">
        <div class="lunga_container">
            <div class="title">
                <h2>Pasta Lunga</h2> 
            </div>
           <div class="cards">
                @foreach ($paste as $pasta)

                    @if ($pasta['tipo'] == 'lunga')
                    
                        <div class="card">
                            <img src="{{ $pasta['src']}}" alt="">
                            <div class="layover"><p>{{ $pasta['titolo']}}</p></div>
                        </div>

                    @endif
                @endforeach
           </div>

        </div>

        <div class="corta_container">
            <div class="title">
                <h2>Pasta Corta</h2> 
            </div> 
            <div class="cards">
                @foreach ($paste as $pasta)

                    @if ($pasta['tipo'] == 'corta')
                    
                        <div class="card">
                            <img src="{{ $pasta['src']}}" alt="">
                            <div class="layover"><p>{{ $pasta['titolo']}}</p></div>
                        </div>

                    @endif
                @endforeach
           </div>
         </div>

         <div class="cortissima_container">
            <div class="title">
                <h2>Pasta Cortissima</h2> 
            </div> 
            <div class="cards">
                @foreach ($paste as $pasta)

                    @if ($pasta['tipo'] == 'cortissima')
                    
                        <div class="card">
                            <img src="{{ $pasta['src']}}" alt="">
                            <div class="layover"><p>{{ $pasta['titolo']}}<p></div>
                        </div>

                    @endif
                @endforeach
           </div>
        </div>
        
    </div>

@endsection