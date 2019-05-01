@extends('layouts.app_admin')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/grupos.css') }}}" rel="stylesheet">
<!-- CORE CSS-->
<link href="{{{ asset('css/style.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('title', 'Crear Grupo')

@section('content')
<div class="section container">
  <div class="row">
    <form class="col  s12 m12" id="" action="" method="post">
      {{ csrf_field() }}
      <div class="row card-panel">
        <div class="row">
          <div class="col m6 push-m3 s12" style="text-align: center;">
            <h4>Crear Grupo</h4>
          </div>
        </div>
        <div class="input-field col s12 m3">
          <input type="text" name="seccion" id="seccion" value="">
          <label for="seccion">Seccion</label>
        </div>
        <div class="input-field col s12 m5">
          <select class="" name="carrera" id="carrera">
            <option value="" disabled>Elige una opcion</option>
            @foreach($carreras as $carrera)
            <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>
            @endforeach
          </select>
          <label for="carrera">Carrera</label>
        </div>
        <div class="input-field col s12 m4">
          <select class="" name="materia" id="materia">
            <option value="" disabled>Elige una opcion</option>
            @foreach($materias as $materia)
            <option value="{{$materia->id_materia}}">{{$materia->nombre_materia}}</option>
            @endforeach
          </select>
          <label for="materia">Materia</label>
        </div>
        <div class="input-field col s12 m6">
          <select class="" name="profesor" id="profesor">
            <option value="" disabled>Elige una opcion</option>
            @foreach($profesores as $profesor)
            <option value="{{$profesor->id_prof}}">{{$profesor->nombres}} {{$profesor->apaterno}} {{$profesor->amaterno}}</option>
            @endforeach
          </select>
          <label for="profesor">Profesor</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" name="periodo" id="periodo" value="">
          <label for="periodo">Periodo</label>
        </div>
        <div class="col s12" style="text-align: center;">

          <h4>Horario</h4>
          <ul class="tabs">
            <li class="tab col s2"><a class="active" href="#test1">Lunes</a></li>
            <li class="tab col s2"><a href="#test2">Martes</a></li>
            <li class="tab col s2"><a href="#test3">Miércoles</a></li>
            <li class="tab col s2"><a href="#test4">Jueves</a></li>
            <li class="tab col s2"><a href="#test5">Viernes</a></li>
            <li class="tab col s2"><a href="#test6">Sábado</a></li>
          </ul>
        </div>
        <div id="test1" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_lunes" id="hora_ini_lunes" value="">
            <label for="hora_ini_lunes">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_lunes" id="hora_fin_lunes" value="">
            <label for="hora_fin_lunes">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" name="aula_lunes" id="aula_lunes" value="">
            <label for="aula_lunes">Aula</label>
          </div>
        </div>
        <div id="test2" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_martes" id="hora_ini_martes" value="">
            <label for="hora_ini_martes">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_martes" id="hora_fin_martes" value="">
            <label for="hora_fin_martes">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" name="aula_martes" id="aula_martes" value="">
            <label for="aula_martes">Aula</label>
          </div>
        </div>
        <div id="test3" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_miercoles" id="hora_ini_miercoles" value="">
            <label for="hora_ini_miercoles">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_miercoles" id="hora_fin_miercoles" value="">
            <label for="hora_fin_miercoles">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" name="aula_miercoles" id="aula_miercoles" value="">
            <label for="aula_miercoles">Aula</label>
          </div>
        </div>
        <div id="test4" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_jueves" id="hora_ini_jueves" value="">
            <label for="hora_ini_jueves">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_jueves" id="hora_fin_jueves" value="">
            <label for="hora_fin_jueves">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" name="aula_jueves" id="aula_jueves" value="">
            <label for="aula_jueves">Aula</label>
          </div>
        </div>
        <div id="test5" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_viernes" id="hora_ini_viernes" value="">
            <label for="hora_ini_viernes">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_viernes" id="hora_fin_viernes" value="">
            <label for="hora_fin_viernes">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" name="aula_viernes" id="aula_viernes" value="">
            <label for="aula_viernes">Aula</label>
          </div>
        </div>
        <div id="test6" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_sabado" id="hora_ini_sabado" value="">
            <label for="hora_ini_sabado">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_sabado" id="hora_fin_sabado" value="">
            <label for="hora_fin_sabado">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" name="aula_sabado" id="aula_sabado" value="">
            <label for="aula_sabado">Aula</label>
          </div>
        </div>
        <div class="row">

        </div>

        <a href="#modal_asignar" class="btn modal-trigger">Asignar Alumnos</a>

        <div class="row">
        </div>

        <div class="input-field col m3 s12">
          <button class="btn light-blue darken-4" type="submit">Registrar
            <i class="material-icons right">send </i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal asignar -->
<div id="modal_asignar" class="modal">
  <div class="modal-content">
    form class="" action="" method="post">

    <div class="filtros">
      <div class="row">
        <div class="col m6 push-m3 s12" style="text-align: center;">
          <h4>Asignación de alumnos a grupo</h4>
        </div>
      </div>
      <div class="row">


        <div class="input-field col m6 s12 ">

          <label for="fcarrera">Carrera:</label>
        </div>

        <div class="input-field col m6 s12 ">
          <input type="number" name="fperiodo" id="fperiodo" value="1" max="12" min="1" class="validate" required maxlength="35">
          <label for="fperiodo">Semestre</label>
        </div>
      </div>
    </div>


    <table id="example" class="responsive-table striped" style="width:100%">
      <thead>
        <tr>
          <th>Seleccionar</th>
          <th>Número de control</th>
          <th>Nombre Completo</th>
          <th>Fecha de Nacimiento</th>
          <th>Correo Electronico</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    <div class="input-field">
      <button type="button" class="btn modal-close" name="button">Registrar</button>
    </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')

@endsection