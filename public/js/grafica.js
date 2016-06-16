$( document ).ready(function() {

  $( "#si" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica3(parseInt($('#si').val()),parseInt($('#no').val()),parseInt($('#a_veces').val()),res[0]);
  });

  $( "#no" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica3(parseInt($('#si').val()),parseInt($('#no').val()),parseInt($('#a_veces').val()),res[0]);
  });

  $( "#a_veces" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica3(parseInt($('#si').val()),parseInt($('#no').val()),parseInt($('#a_veces').val()),res[0]);
  });

  $( "#si2" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si2').val()),parseInt($('#no2').val()),res[0]);
  });

  $( "#no2" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si2').val()),parseInt($('#no2').val()),res[0]);
  });

  $( "#si3" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si3').val()),parseInt($('#no3').val()),res[0]);
  });

  $( "#no3" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si3').val()),parseInt($('#no3').val()),res[0]);
  });

  $( "#bastante" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica3(parseInt($('#bastante').val()),parseInt($('#poco').val()),parseInt($('#nada').val()),res[0]);
  });

  $( "#poco" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica3(parseInt($('#bastante').val()),parseInt($('#poco').val()),parseInt($('#nada').val()),res[0]);
  });

  $( "#nada" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica3(parseInt($('#bastante').val()),parseInt($('#poco').val()),parseInt($('#nada').val()),res[0]);
  });

  $( "#si5" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si5').val()),parseInt($('#no5').val()),res[0]);
  });


  $( "#no5" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si5').val()),parseInt($('#no5').val()),res[0]);
  });


  $( "#one" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica4(parseInt($('#one').val()),parseInt($('#two').val()),parseInt($('#three').val()),parseInt($('#other').val()),res[0]);
  });

  $( "#two" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica4(parseInt($('#one').val()),parseInt($('#two').val()),parseInt($('#three').val()),parseInt($('#other').val()),res[0]);
  });

  $( "#three" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica4(parseInt($('#one').val()),parseInt($('#two').val()),parseInt($('#three').val()),parseInt($('#other').val()),res[0]);
  });

  $( "#other" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica4(parseInt($('#one').val()),parseInt($('#two').val()),parseInt($('#three').val()),parseInt($('#other').val()),res[0]);
  });

  $( "#escuela" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica4(parseInt($('#escuela').val()),parseInt($('#colegio').val()),parseInt($('#general').val()),parseInt($('#other7').val()),res[0]);
  });

  $( "#colegio" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica4(parseInt($('#escuela').val()),parseInt($('#colegio').val()),parseInt($('#general').val()),parseInt($('#other7').val()),res[0]);
  });

    $( "#general" ).keyup(function() {
      var res = $(this).attr('class').split(" ");
      actualizarGrafica4(parseInt($('#escuela').val()),parseInt($('#colegio').val()),parseInt($('#general').val()),parseInt($('#other7').val()),res[0]);
    });

    $( "#other7" ).keyup(function() {
      var res = $(this).attr('class').split(" ");
      actualizarGrafica4(parseInt($('#escuela').val()),parseInt($('#colegio').val()),parseInt($('#general').val()),parseInt($('#other7').val()),res[0]);
    });


  $( "#si8" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si8').val()),parseInt($('#no8').val()),res[0]);
  });

  $( "#no8" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si8').val()),parseInt($('#no8').val()),res[0]);
  });

  $( "#si9" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si9').val()),parseInt($('#no9').val()),res[0]);
  });

  $( "#no9" ).keyup(function() {
    var res = $(this).attr('class').split(" ");
    actualizarGrafica(parseInt($('#si9').val()),parseInt($('#no9').val()),res[0]);
  });

});

function actualizarGrafica(a,b,container) {
  if(!isNaN(a) && !isNaN(b))
  {
    var chart = $("#"+container).highcharts();
    chart.series[0].setData([a,b]);
  }
}

function actualizarGrafica3(a,b,c,container) {
  if(!isNaN(a) && !isNaN(b) && !isNaN(c))
  {
    var chart = $("#"+container).highcharts();
    chart.series[0].setData([a,b,c]);
  }
}

function actualizarGrafica4(a,b,c,d,container) {
  if(!isNaN(a) && !isNaN(b) && !isNaN(c) && !isNaN(d))
  {
    var chart = $("#"+container).highcharts();
    chart.series[0].setData([a,b,c,d]);
  }
}
