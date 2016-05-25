@extends('layouts/main') @section('wrapper')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text"><h1>BENVINGUTS A CHARLOTTE'S GRILL</h1></div>
    </div>
    <div class="row">
        <div class="col-sm-5 square">
            <div class="int">
                <a href="{{ url('/prueba') }}"><h1>Carta</h1>
                <i class="fa fa-book icon1" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="col-sm-5 square">
            <div class="int">
                <a href="{{ url('/prueba') }}"><h1>Comanda</h1>
                <i class="fa fa-cutlery icon" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@stop
