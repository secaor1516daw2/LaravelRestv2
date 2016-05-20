@extends('layouts/main') @section('wrapper')
@section('postJquery')
$("div.enlazado:first").on("click", function () {
    $(".amanides").show();
    $(".butifarres").hide();
    $(".compartir").hide();
    $(".hamburgueses").hide();
    $(".sugerencies").hide();
    console.log(1);

});
$(".enlazado:nth-child(2)").on("click", function () {
    $(".amanides").hide();
    $(".butifarres").show();
    $(".compartir").hide();
    $(".hamburgueses").hide();
    $(".sugerencies").hide();
    console.log(2);
});
$(".enlazado:nth-child(3)").on("click", function () {
    $(".amanides").hide();
    $(".butifarres").hide();
    $(".compartir").show();
    $(".hamburgueses").hide();
    $(".sugerencies").hide();
    console.log(3);
});
$(".enlazado:nth-child(4)").on("click", function () {
    $(".amanides").hide();
    $(".butifarres").hide();
    $(".compartir").hide();
    $(".hamburgueses").show();
    $(".sugerencies").hide();
    console.log(4);
});
$(".enlazado:last-child").on("click", function () {
    $(".amanides").hide();
    $(".butifarres").hide();
    $(".compartir").hide();
    $(".hamburgueses").hide();
    $(".sugerencies").show();
    console.log(5);
});

@parent
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
        @foreach($plats as $plat) {{-- */$url = strtolower($plat);/* --}}
        <div class="col-sm-2 enlazado">
<!--            <a href={{ url( '/'.$url) }}>-->
                <h1>{{$plat}}</h1>
<!--            </a>-->
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
                @for ($i = 0; $i < count($id1); $i++) <tr>
                    <td>{{$id1[$i]}}</td>
                    <td>{{$nom1[$i]}}</td>
                    <td>{{$descripcio1[$i]}}</td>
                    <td>{{$tipus1[$i]}}</td>
                    <td>{{$preu1[$i]}}</td>
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
                    <th>Tipus</th>
                    <th>Preu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($id2); $i++) <tr>
                    <td>{{$id2[$i]}}</td>
                    <td>{{$nom2[$i]}}</td>
                    <td>{{$tipus2[$i]}}</td>
                    <td>{{$preu2[$i]}}</td>
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
                    <th>Tipus</th>
                    <th>Preu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($id3); $i++) <tr>
                    <td>{{$id3[$i]}}</td>
                    <td>{{$nom3[$i]}}</td>
                    <td>{{$tipus3[$i]}}</td>
                    <td>{{$preu3[$i]}}</td>
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
                @for ($i = 0; $i < count($id4); $i++) <tr>
                    <td>{{$id4[$i]}}</td>
                    <td>{{$nom4[$i]}}</td>
                    <td>{{$descripcio4[$i]}}</td>
                    <td>{{$tipus4[$i]}}</td>
                    <td>{{$preu4[$i]}}</td>
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
                    <th>Tipus</th>
                    <th>Preu</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($id5); $i++) <tr>
                    <td>{{$id5[$i]}}</td>
                    <td>{{$nom5[$i]}}</td>
                    <td>{{$tipus5[$i]}}</td>
                    <td>{{$preu5[$i]}}</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
    <div class="container amanides">
        <div class="row">
            <form class="form-inline" method="post" action="{{ url('/pedir') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nPlat">nº Plat:</label>
                    <select name="nPlat" class="form-control" id="nPlat">
                        @foreach($id1 as $id)
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
    <div class="container butifarres">
        <div class="row">
            <form class="form-inline" method="post" action="{{ url('/pedir') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nPlat">nº Plat:</label>
                    <select name="nPlat" class="form-control" id="nPlat">
                        @foreach($id2 as $id)
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
    <div class="container compartir">
        <div class="row">
            <form class="form-inline" method="post" action="{{ url('/pedir') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nPlat">nº Plat:</label>
                    <select name="nPlat" class="form-control" id="nPlat">
                        @foreach($id3 as $id)
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
    <div class="container hamburgueses">
        <div class="row">
            <form class="form-inline" method="post" action="{{ url('/pedir') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nPlat">nº Plat:</label>
                    <select name="nPlat" class="form-control" id="nPlat">
                        @foreach($id4 as $id)
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
    <div class="container sugerencies">
        <div class="row">
            <form class="form-inline" method="post" action="{{ url('/pedir') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nPlat">nº Plat:</label>
                    <select name="nPlat" class="form-control" id="nPlat">
                        @foreach($id5 as $id)
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
