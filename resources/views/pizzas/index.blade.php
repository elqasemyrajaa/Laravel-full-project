@extends('Layouts.app')

@section('content')

    <div class="wrapper pizza-index">
        <h1>Pizza Orders</h1>
        @foreach ($pizza as $pizza)
        <div class="pizza-item">
           <img src="/img/pizza.png"/>
        <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
        </div>
       @endforeach
    </div>
        
@endsection
       

        
