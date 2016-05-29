@extends('layouts/main') @section('wrapper')
<button type="button" class="btn btn-default boto1" onclick="location.href='/principal'">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
</button>
<button type="button" class="btn btn-default boto2" onclick="location.href='/principal'">
    <i class="fa fa-home" aria-hidden="true"></i>
</button>
<div class="container">
    <div class="row">
        @foreach($plats as $plat) {{-- */$url = strtolower($plat);/* --}}
        <div class="col-sm-2 enlazado">
            <a href={{ url( '/'.$url) }}><h1>{{$plat}}</h1></a>
        </div>
        @endforeach
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>nº</th>
                <th>Nom</th>
                <th>Tipus</th>
                <th>Preu</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i
            < count($noms); $i++) <tr>
                <td>{{$ids[$i]}}</td>
                <td>{{$noms[$i]}}</td>
                <td>{{$tipuss[$i]}}</td>
                <td>{{$preus[$i]}}</td>
                </tr>
                @endfor
        </tbody>
    </table>
</div>
@stop
