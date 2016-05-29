@extends('layouts.factura') @section('wrapper')
<button type="button" class="btn btn-default boto1" onclick="location.href='/generarCuenta'">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
</button>
<button type="button" class="btn btn-default boto2" onclick="location.href='/home'">
    <i class="fa fa-home" aria-hidden="true"></i>
</button>
<button type="button" class="btn btn-success boto3" onclick="location.href='/pagada'">Pagada</button>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="dir">
            <h3 class="text-center">CHARLOTTE'S GRILL</h3>
            <h4 class="text-center"> Sant Carles, 2</h4>
            <h4 class="text-center">08911 Badalona</h4>
            <h4 class="text-center">Tlf. fix 93 464 41 39</h4>
            <h4 class="text-center">Mòbil 603 268 798</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-5 col-sm-offset-1">
        <h3 class="text-left">FACTURA</h3>
        <h3 class="text-left">TAULA: {{$nTaula}}</h3>
    </div>
    <div class="col-sm-5">
        <h3 class="text-right">DATA: {{$data}}</h3>
        <h3 class="text-right">HORA: {{$hora}}</h3>
    </div>
</div>

<div class="row">
    <div class="col-sm-10 col-sm-offset-1 ">
        <table class="table">
            <thead>
                <tr>
                    <th>Quantitat</th>
                    <th>Concepte</th>
                    <th>Preu</th>
                    <th>Import</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i< count($nPlat); $i++) <tr>
                    <td>{{$quantitat[$i]}}</td>
                    <td>{{$noms[$i]}}</td>
                    <td>{{$preus[$i]}}€</td>
                    <td>{{$import[$i]}}€</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-sm-5 pull-right total ">
        <h1>TOTAL: {{$total}} €</h1>
    </div>
</div>
</div>



@endsection
