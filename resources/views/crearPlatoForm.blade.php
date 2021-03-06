@extends('layouts.app') @section('content')
<button type="button" class="btn btn-default boto1" onclick="location.href='/home'">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
</button>
<button type="button" class="btn btn-default boto2" onclick="location.href='/home'">
    <i class="fa fa-home" aria-hidden="true"></i>
</button>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Plat</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/crearPlato') }}">
                        {{ csrf_field() }}
                <div class="form-group">
                    <label for="nom" class="col-sm-4 control-label">Nom</label>
                    <div class="col-sm-6">
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcio" class="col-sm-4 control-label">Descripcio</label>
                    <div class="col-sm-6">
                        <input type="text" name="descripcio" class="form-control" id="descripcio" placeholder="Descripció">
                    </div>
                </div>
                <div class="form-group">
                    <label for="preu" class="col-sm-4 control-label">Preu</label>
                    <div class="col-sm-6">
                        <input type="text" name="preu" class="form-control" id="preu" placeholder="Preu">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tipus" class="col-sm-4 control-label">Tipus:</label>
                    <div class="col-sm-6">
                        <select name="tipus" class="form-control" id="tipus">
                            @foreach($plats as $plat)
                            <option>{{$plat}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check-square-o"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
