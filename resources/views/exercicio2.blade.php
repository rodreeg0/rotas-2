@extends('layouts.layout')

@section('content')
    <div class="container <?= count($random) >= 18 ? 'h-75 overflow-y' : '' ?>  col-md-5 col-10 text-center centered">
        
        
        <ul class="list-group ">
            @foreach($random as $key => $value)
                <li class="list-group-item">Produto {{$key + 1}} -> {{$value}}</li>
            @endforeach
        </ul>
    </div>
@endsection