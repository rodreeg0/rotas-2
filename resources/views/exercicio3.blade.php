@extends('layouts.layout')

@section('content')
<div class="container col-md-5 col-10 text-center centered">
    <ul class="list-group ">
        <li class="list-group-item">
            {{'Números ->['}}
            @php
            $i = 0;
            $len = count($numeros);
            foreach ($numeros as $n) {
            if ($i == $len - 1) {
                echo $n.']';
            }else{
                echo $n.', ';
            }
            $i++;
            }
            @endphp
            
        </li>
    <li class="list-group-item">Soma -> {{$soma}}</li>
    <li class="list-group-item">Quantidade -> {{$quantidade}}</li>
    <li class="list-group-item">Média -> {{$media}}</li>
    </ul>
</div>
@endsection