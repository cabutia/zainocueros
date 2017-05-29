@extends('mainweb.layout')

@section('content')
  <img src="{{ asset('images/wip-background.jpg') }}" class="wip-background">

  <!-- Logo -->
  <div class="row" style="margin-top: 100px;">
    <div class="col s12 m8 l4 offset-m2 offset-l4 center">
      <img src="{{ asset('images/zaino-logo.png') }}" alt="Zaino Diseño en cuero" class="responsive-img" id="main-head-logo">
    </div>
  </div>

  <!-- Paraph -->
  <div class="row">
    <div class="col s10 m6 offset-s1 offset-m3 center-align">
      <span class="white-text flow-text">
        Estamos trabajando en la web. Mientras tanto, podes dejarnos un mensaje.
      </span>
    </div>
  </div>

  <!-- Contact form -->
  <div class="row">
    {{ Form::open([
      "class" => "col s10 m8 l6 offset-s1 offset-m2 offset-l3",
      "route" => "consulta.send",
      "method" => "post"
      ]) }}
      <div class="input-field col s12">
        <input type="text" name="name" id="name">
        <label for="name">Su nombre</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="phone" id="phone">
        <label for="phone">Telefono de contacto</label>
      </div>
      <div class="input-field col s12">
        <textarea name="details" id="details" class="materialize-textarea"></textarea>
        <label for="details">Su consulta...</label>
      </div>
      <div class="input-field col s12 hide-on-med-and-up center-align">
        <button type="submit" class="btn-flat white-text waves-effect waves-light center center-align">Enviar consulta!</button>
      </div>
      <div class="input-field col s12 hide-on-small-only">
        <button type="submit" class="btn-flat white-text waves-effect waves-light right">Enviar consulta!</button>
      </div>
    {{ Form::close() }}
  </div>

@endsection
