@extends('layouts.app') @section('content')
<button type="button" class="btn btn-default boto1" onclick="location.href='/home'">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
</button>
<button type="button" class="btn btn-default boto2" onclick="location.href='/home'">
    <i class="fa fa-home" aria-hidden="true"></i>
</button>
<div class="container">
    <div class="row">
        @for($i=0; $i < 4 ;$i ++)
        <div class="col-sm-1">
        <div class="circulo"></div>
        </div>
        <div class="col-sm-2">
            <div class="circulo"></div>
        </div>
        @endfor
    </div>
    <div class="row">
        @for($i=1; $i < 5; $i ++)
            @if($i <= count($mesas))
            <div class="col-sm-2 square dashed">
                <a href={{ url('/showCuenta/'.$i) }}>
                    <h1>{{$i}}</h1>
                </a>
                </div>
            @else
            <div class="col-sm-2 square dashed">
                    <h1>/</h1>
                </div>
            @endif
        @endfor
    </div>
    <div class="row">
        @for($i=0; $i < 4 ;$i ++)
        <div class="col-sm-1">
            <div class="circulo2"></div>
        </div>
        <div class="col-sm-2">
            <div class="circulo2"></div>
        </div>
        @endfor
    </div>

    <div class="row">
        @for($i=0; $i < 4 ;$i ++)
        <div class="col-sm-1">
        <div class="circulo espai"></div>
        </div>
        <div class="col-sm-2">
            <div class="circulo espai"></div>
        </div>
        @endfor
    </div>
    <div class="row">
        @for($i=5; $i < 9;$i ++)
            @if($i <= count($mesas))
            <div class="col-sm-2 square dashed">
                <a href={{ url('/showCuenta/'.$i) }}>
                    <h1>{{$i}}</h1>
                </a>
                </div>
            @else
            <div class="col-sm-2 square dashed">
                    <h1>/</h1>
                </div>
            @endif
        @endfor
    </div>
    <div class="row">
        @for($i=0; $i < 4 ;$i ++)
        <div class="col-sm-1">
            <div class="circulo2"></div>
        </div>
        <div class="col-sm-2">
            <div class="circulo2"></div>
        </div>
        @endfor
    </div>
</div>
@endsection
