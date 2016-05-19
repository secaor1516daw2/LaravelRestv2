@extends('layouts/main') @section('wrapper')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{ url('/deletePlato') }}" method="POST" class="form-horizontal formulari">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nom" class="col-sm-2 control-label">Nom:</label>
                    <div class="col-sm-5">
                        <select name="nom" class="form-control" id="nom">
                            @foreach($plats as $plat)
                            <option>{{$plat}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
