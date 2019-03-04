@extends('layouts.app')

@section('stylesheet')
  <link href="{{{ asset('css/style_admin.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
<div class="background">

    <div class="barra_superior">
      <div class="row">
        <div class="col s4  push-s4  ">
          <div class="logo">
            <img class="img-logo" src="{{{ asset('img/logo/lm_b_s.png') }}}" alt="">
          </div>
        </div>
      </div>
    </div>


    <div class="section container">
      <div class="row">
        <form class="col  s12 m12">

          <div class="row card-panel">



            <div class="input-field col m2 s12 ">
              <!--<i class="material-icons prefix">account_circle</i>-->
              <input type="text" id="semestre" class="validate" required>
              <label for="semestre">Semestre en curso:</label>
            </div>
            <div class="input-field col m5 s12 ">
              <!--<i class="material-icons prefix">account_circle</i>-->
              <input type="text" id="nomfam" class="validate" required>
              <label for="nomfam">Nombre del familiar responsable:</label>
            </div>
            <div class="input-field col m5 s12 ">
              <!--<i class="material-icons prefix">account_circle</i>-->
              <input type="text" id="telfam" class="validate" required>
              <label for="telfam">Número de teléfono del familiar:</label>
            </div>




@endsection
@section('scripts')

@endsection
