@extends('layouts.layout') @section('content')
<div class="container text-center centered">
    @if(!@isset($userData))
        <form class="form" action="{{ url('atividade4') }}" method="POST">
            @csrf
            <div class="row">
                <div class="mt-3">
                    <label class="">Pergunta 1 </label>
                    <label class="ml-3 radio-inline">
                        
                        <input type="radio" name="q1" value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q1"  value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q1" value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q1" value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q1"  value="E" />E
                    </label>
                </div>
                <div class="mt-3">
                    <label class="">Pergunta 2 </label>
                    <label class="ml-3 radio-inline">
                        <input type="radio" name="q2"  value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q2"value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q2" value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q2"  value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q2"  value="E" />E
                    </label>
                </div>
                <div class="mt-3">
                    <label class="">Pergunta 3 </label>
                    <label class="ml-3 radio-inline">
                        <input type="radio" name="q3"  value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q3"  value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q3"  value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q3"  value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q3"  value="E" />E
                    </label>
                </div>
                <div class="mt-3">
                    <label class="">Pergunta 4 </label>
                    <label class="ml-3 radio-inline">
                        <input type="radio" name="q4" value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q4"  value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q4"  value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q4"  value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q4"  value="E" />E
                    </label>
                </div>
                <div class="mt-3">
                    <label class="">Pergunta 5 </label>
                    <label class="ml-3 radio-inline">
                        <input type="radio" name="q5"  value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q5"  value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q5"  value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q5"  value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q5"  value="E" />E
                    </label>
                </div>
                <div class="mt-3">
                    <label class="">Pergunta 6 </label>
                    <label class="ml-3 radio-inline">
                        <input type="radio" name="q6"  value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q6"  value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q6"  value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q6"  value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q6" value="E" />E
                    </label>
                </div>
                <div class="mt-3">
                    <label class="">Pergunta 7 </label>
                    <label class="ml-3 radio-inline">
                        <input type="radio" name="q7"  value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q7" value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q7"  value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q7" value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q7"  value="E" />E
                    </label>
                </div>
                <div class="mt-3">
                    <label class="">Pergunta 8 </label>
                    <label class="ml-3 radio-inline">
                        <input type="radio" name="q8"  value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q8"  value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q8"  value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q8"  value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q8" value="E" />E
                    </label>
                </div>
                <div class="mt-3">
                    <label class="">Pergunta 9 </label>
                    <label class="ml-3 radio-inline">
                        <input type="radio" name="q9"  value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q9"  value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q9"  value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q9"  value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q9"  value="E" />E
                    </label>
                </div>
                <div class="mt-3">
                    <label class="">Pergunta 10 </label>
                    <label class="ml-3 radio-inline">
                        <input type="radio" name="q10"  value="A" />A
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q10" value="B" />B
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q10" value="C" />C
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q10"  value="D" />D
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="q10"  value="E" />E
                    </label>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mt-4">
        </form>
    @else
    <div class="container col-10 col-md-6 centered">
        <ul class="list-group ">
            @for($i = 1; $i <= 10; $i++)
                <li class="list-group-item">
                    Pergunta <?=$i?> -> Sua resposta: <?= $userData["$i"][0]?> - Resposta correta:  <?= $gabarito["$i"]?> - 
                    <span <?= $userData["$i"][1] == 'Errou' ? 'style="color: red"' : 'style="color: green"'?>><?= $userData["$i"][1]?> </span>
                </li>
            @endfor
        </ul>
        <a class="mt-4 btn-primary btn btn-sm" href="/atividade4">REFAZER TESTE</a>
    </div>
    @endif
</div>

@endsection