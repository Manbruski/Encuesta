$( document ).ready(function() {

  $( "#si" ).keyup(function() {
    actualizarGrafica(parseInt($('#si').val()),parseInt($('#no').val()));
  });

  $( "#no" ).keyup(function() {
    actualizarGrafica(parseInt($('#si').val()),parseInt($('#no').val()));

  });
});

function actualizarGrafica(a,b) {
  var chart = $('#container').highcharts();
  chart.series[0].setData([a,b]);
}
