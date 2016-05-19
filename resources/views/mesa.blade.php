@extends('layouts/main') @section('wrapper')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{ url('/showPlatTaula') }}" method="POST" class="form-horizontal formulari">
                {{ csrf_field() }}
                <!--
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                </div>
-->
                <div class="form-group">
                    <label for="taula" class="col-sm-2 control-label">Número de taula</label>
                    <div class="col-sm-5">
                        <input type="text" name ="taula" class="form-control" id="taula" placeholder="nº de taula">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
