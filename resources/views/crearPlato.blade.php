@extends('layouts.app') @section('content')

{{ $nom or 'Default' }}
{{ $descripcio or 'Default' }}
{{ $tipus or 'Default' }}
{{ $preu or 'Default' }}
@endsection
