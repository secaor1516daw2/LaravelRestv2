<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

    <title>Charlotte's Grill</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Custom javascripts for this template -->
    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>
<script type="text/javascript">
    function goBack() {
        window.history.back();
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
    <header>
        <div class="lock">
            <a href="{{ url('/home') }}">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </a>
        </div>
<!--
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <button type="button" class="btn btn-default confirmar" onclick="goBack()">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
-->
<!--        <div class="wrapper center">-->
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-1">
                <button type="button" class="btn btn-default boto" onclick="goBack()">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </button>
            </div>
            <div class="col-sm-5">
                <img class="logo" src="../assets/img/logo.png" alt="Charlotte's Grill" />
            </div>
        </div>
    </div>
<!--        </div>-->
    </header>
<div class="content">
    <div class="container">
        <div class="row">
            <table class="table table-striped tabla">
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
                        <td>
                            <input type="button" class="btn btn-default" onclick=" location.href='{{ url("/borrar/".$i) }}' " value="Borrar" name="boton" />
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3">
                <input type="button" class="btn btn-default" onclick=" location.href='{{ url("/prueba") }}'" value="Continuar Comanda" name="boton" />
                <input type="button" class="btn btn-primary confirmar" onclick=" location.href='{{ url("/confirmar") }}'" value="Confirmar Comanda" name="boton" />
            </div>
        </div>
    </div>
</div>

    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.2.2.js" integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script>
        jQuery(document).ready(function () {@
            yield('postJquery');
        });
    </script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
