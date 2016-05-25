@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        @for($i=0; $i
        < count($mesas);$i ++) <div class="col-sm-2 square dashed">
            <a href={{ url('/showPlatTaula/'.$mesas[$i]) }}>
                <h1>{{$mesas[$i]}}</h1>
            </a>
    </div>
    @endfor
</div>
</div>
@endsection
