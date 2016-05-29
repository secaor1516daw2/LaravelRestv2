@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-5 square">
            <div class="int">
                <a href="{{ url('/platoForm') }}"><h1>CREAR PLAT</h1>
                <i class="fa fa-plus-circle icon1" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="col-sm-5 square">
            <div class="int">
                <a href="{{ url('/deletePlatoForm') }}"><h1>ELIMINAR PLAT</h1>
                <i class="fa fa-ban icon1" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 square">
            <div class="int">
                <a href="{{ url('/mesa') }}"><h1>COMANDES</h1>
                <i class="fa fa-list icon1" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="col-sm-5 square">
            <div class="int">
                <a href="{{ url('/generarCuenta') }}"><h1>COMPTE</h1>
                <i class="fa fa-calculator icon1" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
