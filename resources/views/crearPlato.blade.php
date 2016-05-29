@extends('layouts.app') @section('content')

<div class="container">
    <div class="row mtop20">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="alert alert-success msg"><i class="fa fa-check-circle" aria-hidden="true"></i>El plat s'ha creat correctament i ha sigut emmagatzemat a la base de dades</div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="active">Nom</th>
                        <th class="active">Descripcio</th>
                        <th class="active">Tipus</th>
                        <th class="active">Preu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="success">{{$nom}}</td>
                        <td class="success">{{$descripcio}}</td>
                        <td class="success">{{$tipus}}</td>
                        <td class="success">{{$preu}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
