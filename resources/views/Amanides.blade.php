@extends('layouts/main') @section('wrapper')
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
    @section('postJquery') @parent
    <!--    $(".numbers-row").append('<div class="inc button">+</div><div class="dec button">-</div>');-->
    $(".numbers-row").append('<i id="suma" class="fa fa-plus-circle inc button" aria-hidden="true"></i><i id="resta" class="fa fa-minus-circle dec button" aria-hidden="true"></i>');
$(".button").on("click", function () {
var $button = $(this);
var oldValue = $button.parent().find("input").val();
var oID = $(this).attr("id");
console.log(oID);

    if (oID == "suma") {
var newVal = parseFloat(oldValue) + 1;
} else {
if (oldValue > 0) {
var newVal = parseFloat(oldValue) - 1;
} else {
newVal = 0;
}
}
$button.parent().find("input").val(newVal);
});
@endsection

    <div class="container">
        <div class="row">
            <form class="form-inline" method="post" action="{{ url('/pedir') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nPlat">nº Plat:</label>
                    <select name="nPlat" class="form-control" id="nPlat">
                        @foreach($ids as $id)
                        <option>{{$id}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group numbers-row">
                    <label for="quantitat">Quantitat:</label>
                    <input type="text" name="quantitat" class="form-control" value="0">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default" >Entrar</button>
                    <input type="button" class="btn btn-default" onclick=" location.href='{{ url('/pedido') }}' " value="Ver Pedido" name="boton" />
                </div>
            </form>

        </div>
    </div>
</div>
@stop

