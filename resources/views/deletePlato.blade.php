@extends('layouts.app') @section('content')
<button type="button" class="btn btn-default boto1" onclick="location.href='/platoForm'">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
</button>
<button type="button" class="btn btn-default boto2" onclick="location.href='/home'">
    <i class="fa fa-home" aria-hidden="true"></i>
</button>
<div class="container">
    <div class="row mtop20">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="alert alert-danger msg"><i class="fa fa-times-circle" aria-hidden="true"></i>El plat <strong>{{$nom}}</strong> s'ha esborrat correctament i ha sigut eliminat de la base de dades</div>
        </div>
    </div>
</div>

@endsection
