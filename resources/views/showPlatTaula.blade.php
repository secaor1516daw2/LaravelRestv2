@extends('layouts/main') @section('wrapper')
<div class="container">
    {{$nTaula or 'Default'}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Tipus</th>
                <th>Preu</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($noms); $i++)
              <tr>
                <td>{{$noms[$i]}}</td>
                <td>{{$tipuss[$i]}}</td>
                <td>{{$preus[$i]}}</td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
@stop
