@extends('layouts.app')

@section('content')
<script src="/js/grafica.js" charset="utf-8"></script>
<script src="/js/highcharts.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="/css/demo.css" />
<link rel="stylesheet" type="text/css" href="/css/component.css" />
<script src="/js/comparacion/modernizr.custom.js"></script>
<script src="/js/comparacion/classie.js"></script>
<script src="/js/comparacion/main.js"></script>


<div class="container">
  <div class="jumbotron">
    <div class="row">
      <!-- Compare basket -->
      <div class="compare-basket">
        <button class="action action--button action--compare"><i class="fa fa-check"></i>
          <span class="action__text">Compare</span>
        </button>
      </div>
      <!-- Main view -->
      <div class="view">
        <!-- Blueprint header -->
        <header class="bp-header cf">

        </header>
        <!-- Product grid -->
        <section class="grid">
          <!-- Products -->
          <div class="product">
            <div class="product__info">
              <img class="product__image" src="/img/1.jpg" alt="Product 1" />
              <h3 class="product__title">Chryseia</h3>
              <span class="product__year extra highlight">2011</span>
              <span class="product__region extra highlight">Douro</span>
              <span class="product__varietal extra highlight">Touriga Nacional</span>
              <span class="product__alcohol extra highlight">13%</span>
              <span class="product__price highlight">$55.90</span>
              <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
            </div>
            <label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
          </div>

          <div class="product">
            <div class="product__info">
              <img class="product__image" src="/img/2.jpg" alt="Product 2" />
              <h3 class="product__title">Meiomi Pinot Noir</h3>
              <span class="product__year extra highlight">2013</span>
              <span class="product__region extra highlight">California</span>
              <span class="product__varietal extra highlight">Pinot Noir</span>
              <span class="product__alcohol extra highlight">12%</span>
              <span class="product__price highlight">$19.90</span>
              <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
            </div>
            <label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
          </div>

          <div class="product">
            <div class="product__info">
              <img class="product__image" src="/img/4.jpg" alt="Product 3" />
              <h3 class="product__title">Antucura Cabernet Sauvignon</h3>
              <span class="product__year extra highlight">2013</span>
              <span class="product__region extra highlight">Argentina</span>
              <span class="product__varietal extra highlight">Cabernet Sauvignon </span>
              <span class="product__alcohol extra highlight">12%</span>
              <span class="product__price highlight">$15.90</span>
              <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
            </div>
            <label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
          </div>

        </section>
      </div><!-- /view -->
      <!-- product compare wrapper -->
      <section class="compare">
        <button class="action action--close">
          <i class="fa fa-remove"></i>
            <span class="action__text action__text--invisible">Close comparison overlay</span>
        </button>
      </section>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading panelColor">Pregunta 1</div>
        <div class="panel-body">
          <div id="container"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta1" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si" class="container form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no" class="container form-control" placeholder="No" />
            </div>
            <div class="form-group">
              <input type="text" name="a_veces" id="a_veces" class="container form-control" placeholder="Algunas veces" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading panelColor">Pregunta 2</div>
        <div class="panel-body">
          <div id="container2"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta2" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si2" class="container2 form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no2" class="container2 form-control" placeholder="No" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading panelColor">Pregunta 3</div>
        <div class="panel-body">
          <div id="container3"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta3" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si3" class="container3 form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no3" class="container3 form-control" placeholder="No" />
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
        <div class="panel-heading panelColor">Pregunta 4</div>
        <div class="panel-body">
          <div id="container4"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta4" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="bastante" id="bastante" class="container4 form-control" placeholder="Bastante" />
            </div>
            <div class="form-group">
              <input type="text" name="poco" id="poco" class="container4 form-control" placeholder="Poco" />
            </div>
            <div class="form-group">
              <input type="text" name="nada" id="nada" class="container4 form-control" placeholder="Nada" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading panelColor">Pregunta 5</div>
        <div class="panel-body">
          <div id="container5"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta5" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si5" class="container5 form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no5" class="container5 form-control" placeholder="No" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading panelColor">Pregunta 6</div>
        <div class="panel-body">
          <div id="container6"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta6" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="one" id="one" class="container6 form-control" placeholder="₡1.500.000" />
            </div>
            <div class="form-group">
              <input type="text" name="two" id="two" class="container6 form-control" placeholder="₡1.000.000" />
            </div>
            <div class="form-group">
              <input type="text" name="three" id="three"  class="container6 form-control" placeholder="₡2.000.000" />
            </div>
            <div class="form-group">
              <input type="text" name="other"  id="other" class="container6 form-control" placeholder="Otro" />
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
        <div class="panel-heading panelColor">Pregunta 7</div>
        <div class="panel-body">
          <div id="container7"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta7" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="escuela"  id="escuela" class="container7 form-control" placeholder="Escuelas" />
            </div>
            <div class="form-group">
              <input type="text" name="colegio" id="colegio" class="container7 form-control" placeholder="Colegios" />
            </div>
            <div class="form-group">
              <input type="text" name="general" id="general" class="container7 form-control" placeholder="Público general" />
            </div>
            <div class="form-group">
              <input type="text" name="other" id="other7" class="container7 form-control" placeholder="Otro" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading panelColor">Pregunta 8</div>
        <div class="panel-body">
          <div id="container9"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta8" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si8" class="container9 form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no8" class="container9 form-control" placeholder="No" />
            </div>
            <input type="submit" class="btn btn-default  pull-right"/>
          </form>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading panelColor">Pregunta 9</div>
        <div class="panel-body">
          <div id="container10"></div>
          @if (Auth::user())
          <hr>
          <form action="/home/pregunta9" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <input type="text" name="si" id="si9" class="container10 form-control" placeholder="Si" />
            </div>
            <div class="form-group">
              <input type="text" name="no" id="no9" class="container10 form-control" placeholder="No" />
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
