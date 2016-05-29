@extends('layouts.app') @section('content')

<div class="container">
    <div class="row mtop20">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="alert alert-danger msg"><i class="fa fa-times-circle" aria-hidden="true"></i>El plat <strong>{{$nom}}</strong> s'ha esborrat correctament i ha sigut eliminat de la base de dades</div>
        </div>
    </div>
</div>

@endsection
