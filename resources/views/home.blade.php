@extends('layouts.app')

@section('content')
<script src="/js/highcharts.js" charset="utf-8"></script>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Pregunta 1</div>

                <div class="panel-body">
                  <div id="container"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Pregunta 2</div>

                <div class="panel-body">
                  <div id="container2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
      $(document).ready(function () {
        $('#container').highcharts(
            {!! json_encode($yourFirstChart) !!}
        );
        $('#container2').highcharts(
            {!! json_encode($yourSecondChart) !!}
        );
      });
    });
</script>
@endsection
