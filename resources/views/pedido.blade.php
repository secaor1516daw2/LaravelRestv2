@extends('layouts/main') @section('wrapper')

@foreach($nPlat as $plat)
nº Plato:{{$plat}}
@endforeach

@foreach($quantitat as $q)
Cantidad:{{$q}}
@endforeach

@stop

