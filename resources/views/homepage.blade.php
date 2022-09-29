@extends('layout.app')

@section('titolo', 'Home')


@section('content')
   <div class="container">
        <div class="cards">
            @foreach($trains as $train)
                <div class="card">
                    <h4>Partenza: </h4>
                    <p>{{$train->stazione_partenza}}</p>
                    <p>{{$train->orario_partenza}}</p>
                    <h4>Arriva a:</h4>
                    <p>{{$train->orario_arrivo}}</p>
                    <p>{{$train->stazione_arrivo}}</p>

                    <span>Partenza in data: {{$train->data_partenza}}</span>
                </div>
            @endforeach
        </div>
   </div> 

@endsection