<head>
  {{-- Titulo de la pagina --}}
  <title>Zaino :: Diseño en cuero</title>

  {{-- CDN & scripts --}}
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  {{-- Framework --}}
  {!! MaterializeCSS::include_full() !!}

  {{-- Estilos de la pagina --}}
  <link rel="stylesheet" href="{{ asset('css/mainweb.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mainweb-600px-landscape.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mainweb-600px.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mainweb-990px.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">


  {{-- Estilos que modifican MaterializeCSS --}}
  <link rel="stylesheet" href="{{ asset('css/materialize-modify.css') }}">

  {{-- Meta tags --}}
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content=" initial-scale=1, user-scalable=0">
</head>
