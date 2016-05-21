@extends('layouts/main') @section('wrapper')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Quantitat</th>
                    <th>nº Plat</th>
                    <th>Nom</th>
                    <th>Preu</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($nPlat); $i++) <tr>
                    <td>{{$quantitat[$i]}}</td>
                    <td>{{$nPlat[$i]}}</td>
                    <td>{{DB::table('plats')->where('id', '=', $nPlat[$i])->value('nom')}}</td>
                    <td>{{(DB::table('plats')->where('id', '=', $nPlat[$i])->value('preu'))*($quantitat[$i])}}</td>
                    <td> <input type="button" class="btn btn-default" onclick=" location.href='{{ url("/borrar/".$i) }}' " value="Borrar" name="boton" /></td>
                    </tr>
                    @endfor
            </tbody>
        </table>

@stop

