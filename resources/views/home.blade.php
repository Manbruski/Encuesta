@extends('layouts.app')

@section('content')
<script src="/js/highcharts.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="/css/estilo.css">

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <p class="textPrincipal">
        PROYECTO FICTICIO 
        Curso de Evaluación de Proyectos.
      </p>
    </div>
  </div>
  <div class="row">
    <img class="principal" src="/img/5.jpg">
  </div>

  <div class="container comparaciones">
    <div class="row">
      <div class="comp col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          Cerebro
          <img class="img" src="/img/6.png" alt="...">
        </a>
      </div>

      <div class="comp col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          Cerebro
          <img class="img" src="/img/7.png" alt="...">
        </a>
      </div>

      <div class="comp col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          Cerebro
          <img class="img" src="/img/8.png" alt="...">
        </a>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 1</div>
        <div class="panel-body">
          <div id="container"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 2</div>
        <div class="panel-body">
          <div id="container2"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 3</div>
        <div class="panel-body">
          <div id="container3"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 4</div>
        <div class="panel-body">
          <div id="container4"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function () {
    Highcharts.setOptions({

    });
    $(document).ready(function () {
      $('#container').highcharts(
        {!! json_encode($pregunta1) !!}
        );
      $('#container2').highcharts(
        {!! json_encode($pregunta2) !!}
        );
      $('#container3').highcharts(
        {!! json_encode($pregunta3) !!}
        );
      $('#container4').highcharts(
        {!! json_encode($pregunta4) !!}
        );
    });
  });
</script>
@endsection
