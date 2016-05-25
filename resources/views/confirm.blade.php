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
        <div class="wrapper center">
            <img class="logo" src="assets/img/logo.png" alt="Charlotte's Grill" />
        </div>
    </header>
    <div class="contenido">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-2 text2">
                    <h1>ESTAMOS REALIZANDO SU PEDIDO</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-4">
                    <img class="cook" src="assets/img/cocinero.gif" alt="Charlotte's Grill" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-4">
                     <input type="button" class="btn btn-primary but" onclick=" location.href='{{ url('/') }}' " value="Tornar a l'Inici" name="boton"/>
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
