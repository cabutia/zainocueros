<head>
  {{-- Titulo de la pagina --}}
  <title>Zaino :: Diseño en cuero</title>

  {{-- CDN & scripts --}}
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  {!! MaterializeCSS::include_full() !!}

  {{-- Estilos de la pagina --}}
  <link rel="stylesheet" href="{{ asset('css/mainweb.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mainweb-600px.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mainweb-990px.css') }}">

  {{-- Estilos que modifican MaterializeCSS --}}
  <link rel="stylesheet" href="{{ asset('css/materialize-modify.css') }}">

  {{-- Meta tags --}}
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content=" initial-scale=1, user-scalable=none">
</head>
