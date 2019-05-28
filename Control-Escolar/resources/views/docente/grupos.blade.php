﻿
@extends('layouts.app_docente')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/docente/grupos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Mis grupos')

@section('content')
  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Mis Grupos</h5>
    </div>
  </div>
@php
$grupo_seleccionado=0;
@endphp
<div class="section container">
  <div class="row">
      <div class="col s12 m4">
        @foreach($grupos_de_profesor as $grupo)
          <div class="card card-grupo">
              <div class="card-content black-text z-depth-3">
                  <span class="card-title">Grupo: {{$grupo->id_grupo}}</span>
                  <p>
                    Materia: {{$grupo->nombre_materia}}<br>
                    Horario:
                  </p>
              </div>
              <div class="card-action">
                  <a onclick="abreModal({{$grupo->id_grupo}})" href="#modal1" class="modal-trigger"><i class="fas fa-cog"></i> Opciones</a>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</div>


<!--modal-->
<div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>Grupo</h4>
        <p>
            <div class="collection">
              <form class="" action="{{ route('docente_consulta') }}" method="post">
                @csrf
                <input type="text" name="id_grupo" value="" hidden>
                <button type="submit" class="collection-item black-text botonModal">Consultar</button>
              </form>
              <form class="" action="{{ route('docente_calif') }}" method="post">
                @csrf
                <input type="text" name="id_grupo" value="" hidden>
                <button type="submit" class="collection-item black-text botonModal">Calificaciones Finales</button>
              </form>
              <form class="" action="{{ route('docente_pdfA') }}" method="get">
                @csrf
                <input type="text" name="id_grupo" value="" hidden>
                <button type="submit" class="collection-item black-text botonModal">PDF BOLETA DE CALIFICACIONES: EVALUACIÓN ORDINARIA</button>
              </form>
              <form class="" action="{{ route('docente_pdfB') }}" method="get">
                @csrf
                <input type="text" name="id_grupo" value="" hidden>
                <button type="submit" class="collection-item black-text botonModal">PDF BOLETA DE CALIFICACIONES: PRIMERA EVALUACIÓN EXTRAORDINARIA</button>
              </form>
              <form class="" action="{{ route('docente_pdfC') }}" method="get">
                @csrf
                <input type="text" name="id_grupo" value="" hidden>
                <button type="submit" class="collection-item black-text botonModal">PDF RELACIÓN DE ALUMNOS NO APROBADOS</button>
              </form>
              <form class="" action="{{ route('docente_pdfF') }}" method="get">
                @csrf
                <input type="text" name="id_grupo" value="" hidden>
                <button type="submit" class="collection-item black-text botonModal">PDF BOLETA DE CALIFICACIONES FINALES</button>
              </form>
              <!--<form class="" action="" method="post">
                @csrf
                <input type="text" name="id_grupo" value="" hidden>
                <button type="submit" class="collection-item black-text botonModal">Método de evaluación</button>
              </form>
              <form class="" action="" method="post">
                @csrf
                <input type="text" name="id_grupo" value="" hidden>
                <button type="submit" class="collection-item black-text botonModal">Obtener acta de calificaciones</button>
              </form>
              <form class="" action="" method="post">
                @csrf
                <input type="text" name="id_grupo" value="" hidden>
                <button type="submit" class="collection-item black-text botonModal">Generar PDF</button>
              </form>-->
            </div>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#" class="modal-close waves-effect waves-green btn-flat">
            <i class="material-icons blue-text text-darken-4"> fullscreen_exit </i>
            <b> Salir </b>
          </a>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{{asset('js/asigna.js')}}}"></script>

@endsection
