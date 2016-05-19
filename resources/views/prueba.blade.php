@extends('layouts/main') @section('wrapper')
<div class="container">
    <div class="row">
        @foreach($plats as $plat) {{-- */$url = strtolower($plat);/* --}}
        <div class="col-sm-2 enlazado">
            <a href={{ url( '/'.$url) }}><h1>{{$plat}}</h1></a>
        </div>
        @endforeach
    </div>
    <div class="amanides">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>nº</th>
                    <th>Nom</th>
                    <th>Descripcio</th>
                    <th>Tipus</th>
                    <th>Preu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i
                < count($noms); $i++) <tr>
                    <td>{{$ids[$i]}}</td>
                    <td>{{$noms[$i]}}</td>
                    <td>{{$descripcions[$i]}}</td>
                    <td>{{$tipuss[$i]}}</td>
                    <td>{{$preus[$i]}}</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
    <div class="butifarres">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>nº</th>
                    <th>Nom</th>
                    <th>Descripcio</th>
                    <th>Tipus</th>
                    <th>Preu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i
                < count($noms); $i++) <tr>
                    <td>{{$ids[$i]}}</td>
                    <td>{{$noms[$i]}}</td>
                    <td>{{$descripcions[$i]}}</td>
                    <td>{{$tipuss[$i]}}</td>
                    <td>{{$preus[$i]}}</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
    <div class="compartir">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>nº</th>
                    <th>Nom</th>
                    <th>Descripcio</th>
                    <th>Tipus</th>
                    <th>Preu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i
                < count($noms); $i++) <tr>
                    <td>{{$ids[$i]}}</td>
                    <td>{{$noms[$i]}}</td>
                    <td>{{$descripcions[$i]}}</td>
                    <td>{{$tipuss[$i]}}</td>
                    <td>{{$preus[$i]}}</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
    <div class="hamburgueses">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>nº</th>
                    <th>Nom</th>
                    <th>Descripcio</th>
                    <th>Tipus</th>
                    <th>Preu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i
                < count($noms); $i++) <tr>
                    <td>{{$ids[$i]}}</td>
                    <td>{{$noms[$i]}}</td>
                    <td>{{$descripcions[$i]}}</td>
                    <td>{{$tipuss[$i]}}</td>
                    <td>{{$preus[$i]}}</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
    <div class="sugerencies">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>nº</th>
                    <th>Nom</th>
                    <th>Descripcio</th>
                    <th>Tipus</th>
                    <th>Preu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i
                < count($noms); $i++) <tr>
                    <td>{{$ids[$i]}}</td>
                    <td>{{$noms[$i]}}</td>
                    <td>{{$descripcions[$i]}}</td>
                    <td>{{$tipuss[$i]}}</td>
                    <td>{{$preus[$i]}}</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>

</div>
@stop
