@extends('layouts.app_coordinador')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/coordinador/grupos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Grupos')


@section('content')
  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Grupos de Carrera</h5>
    </div>
  </div>
  <div class="section container">
    <div class="row">
        <div class="col s12 m4">
            <div class="card card-grupo">
                <div class="card-content black-text z-depth-3">
                    <span class="card-title">Grupo:</span>
                    <p>Materia</p>
                    <p>Horario</p>
                    <p>Profesor</p>
                </div>
                <div class="card-action">
                    <a href="#modal1" class="modal-trigger"><i class="fas fa-cog"></i> Opciones</a>
                </div>
            </div>
        </div>
    </div>
  </div>


  <!--modal-->
  <div id="modal1" class="modal bottom-sheet">
      <div class="modal-content">
          <h4>Grupo</h4>
          <p>
              <div class="collection">
                <form class="" action="" method="post">
                  @csrf
                  <input type="text" name="id_grupo" value="" hidden>
                  <button type="submit" class="collection-item black-text botonModal">Consultar</button>
                </form>
                <form class="" action="{{ route('docente_calif') }}" method="post">
                  @csrf
                  <input type="text" name="id_grupo" value="" hidden>
                  <button type="submit" class="collection-item black-text botonModal">Calificaciones Finales</button>
                </form>
                <form class="" action="" method="post">
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
                </form>
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

@endsection