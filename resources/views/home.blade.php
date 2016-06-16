@extends('layouts.app')

@section('content')
<script src="/js/grafica.js" charset="utf-8"></script>
<script src="/js/highcharts.js" charset="utf-8"></script>
<div class="container-fluid">
<img src="/img/4.jp" alt="" />
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 1</div>
        <div class="panel-body">
          <div id="container"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta1" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si" class="form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no" class="form-control" placeholder="No" />
            </div>
            <div class="form-group">
              <input type="text" name="a_veces" class="form-control" placeholder="Algunas veces" />
            </div>
          	<input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 2</div>
        <div class="panel-body">
          <div id="container2"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta2" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si" class="form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no" class="form-control" placeholder="No" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 3</div>
        <div class="panel-body">
          <div id="container3"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta3" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si" class="form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no" class="form-control" placeholder="No" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
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
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta4" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="bastante" class="form-control" placeholder="Bastante" />
            </div>
            <div class="form-group">
              <input type="text" name="poco" class="form-control" placeholder="Poco" />
            </div>
            <div class="form-group">
              <input type="text" name="nada" class="form-control" placeholder="Nada" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 5</div>
        <div class="panel-body">
          <div id="container5"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta5" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si" class="form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no" class="form-control" placeholder="No" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 6</div>
        <div class="panel-body">
          <div id="container6"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta6" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="one" class="form-control" placeholder="₡1.500.000" />
            </div>
            <div class="form-group">
              <input type="text" name="two" class="form-control" placeholder="₡1.000.000" />
            </div>
            <div class="form-group">
              <input type="text" name="three" class="form-control" placeholder="₡2.000.000" />
            </div>
            <div class="form-group">
              <input type="text" name="other" class="form-control" placeholder="Otro" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 7</div>
        <div class="panel-body">
          <div id="container7"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta7" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="escuela" class="form-control" placeholder="Escuelas" />
            </div>
            <div class="form-group">
              <input type="text" name="colegio" class="form-control" placeholder="Colegios" />
            </div>
            <div class="form-group">
              <input type="text" name="general" class="form-control" placeholder="Público general" />
            </div>
            <div class="form-group">
              <input type="text" name="other" class="form-control" placeholder="Otro" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 8</div>
        <div class="panel-body">
          <div id="container9"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta8" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si" class="form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no" class="form-control" placeholder="No" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">Pregunta 9</div>
        <div class="panel-body">
          <div id="container10"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta9" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si" class="form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no" class="form-control" placeholder="No" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
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
    $('#container5').highcharts(
      {!! json_encode($pregunta5) !!}
    );
    $('#container6').highcharts(
      {!! json_encode($pregunta6) !!}
    );
    $('#container7').highcharts(
      {!! json_encode($pregunta7) !!}
    );
    $('#container9').highcharts(
      {!! json_encode($pregunta8) !!}
    );
    $('#container10').highcharts(
      {!! json_encode($pregunta9) !!}
    );
  });
});
</script>
@endsection
