<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Pregunta1;
use App\Pregunta2;
use App\Pregunta3;
use App\Pregunta4;

class HomeController extends Controller
{
  protected $p1, $p2, $p3, $p4;
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct(Pregunta1 $p1, Pregunta2 $p2, Pregunta3 $p3, Pregunta4 $p4)
  {
    $this->p1 = $p1;
    $this->p2 = $p2;
    $this->p3 = $p3;
    $this->p4 = $p4;
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */

  public function data($var1=null, $var2=null, $var3=null, $var4=null){
    return array_filter([$var1, $var2, $var3, $var4]);
  }
  public function index()
  {
    //Configuracion de Highcharts.js
    $type = ["type" => "pie"];
    $tooltip = ["pointFormat" =>  "{series.name}: <b>{point.percentage:.1f}%</b>"];
    $plotOptions = [
      "pie" =>
      [
        "allowPointSelect" => true,
        "cursor" => "pointer",
        "dataLabels" => ["enabled" => false],
        "showInLegend" => "true"
      ]
    ];
    //---------------------------------------------------------------------------------------------------------------------------
    $r1 = ["name"=> "Si", "y" => isset($this->p1->pluck('val1')[0]) ? $this->p1->pluck('val1')[0] : 0];
    $r2 = ["name"=> "No", "y" => isset($this->p1->pluck('val2')[0]) ? $this->p1->pluck('val2')[0]  : 0];
    $r3 = ["name"=> "Algunas veces", "y" => isset($this->p1->pluck('val3')[0]) ? $this->p1->pluck('val3')[0] : 0];
    $prueba1 = ["name"=> "Si", "y" => $this->p1->select('val1', 'val2', 'val3')->get()];
    $pregunta1 = [
      "chart" => $type,
      "title" => ["text" => "¿Alguna vez ha tenido problemas al comunicarse con alguna persona con limitaciones verbales?"],
      "tooltip" => $tooltip,
      "plotOptions" => $plotOptions,
      "series" => [["name" => "Respuestas", "data" => $this->data($r1, $r2, $r3)]]
    ];
    //dd($prueba1, $r1);
    //---------------------------------------------------------------------------------------------------------------------------
    $r4 = ["name"=> "Si", "y" => isset($this->p2->pluck('val1')[0]) ? $this->p2->pluck('val1')[0] : 0];
    $r5 = ["name"=> "No", "y" => isset($this->p2->pluck('val2')[0]) ? $this->p2->pluck('val2')[0] : 0];

    $pregunta2 = [
      "chart" => $type,
      "title" => ["text" => "¿Conoce algún caso de una persona con parálisis que le impida hablar o comunicarse?"],
      "tooltip" => $tooltip,
      "plotOptions" => $plotOptions,
      "series" => [["name" => "Respuestas", "data" => [$r4, $r5]]]
    ];
    //---------------------------------------------------------------------------------------------------------------------------
    $r6 = ["name"=> "Si", "y" => isset($this->p3->pluck('val1')[0]) ? $this->p3->pluck('val1')[0] : 0];
    $r7 = ["name"=> "No", "y" => isset($this->p3->pluck('val2')[0]) ? $this->p3->pluck('val2')[0] : 0];

    $pregunta3 = [
      "chart" => $type,
      "title" => ["text" => "¿Está de acuerdo en que se crea un dispositivo capaz de escribir en una pantalla los pensamientos de una persona?"],
      "tooltip" => $tooltip,
      "plotOptions" => $plotOptions,
      "series" => [["name" => "Respuestas", "data" => $this->data($r6, $r7)]]
    ];
    //---------------------------------------------------------------------------------------------------------------------------
    $r8 = ["name"=> "Bastante", "y" => isset($this->p4->pluck('val1')[0]) ? $this->p4->pluck('val1')[0] : 0];
    $r9 = ["name"=> "Poco", "y" => isset($this->p4->pluck('val2')[0]) ? $this->p4->pluck('val2')[0] : 0];
    $r10 = ["name"=> "Nada", "y" => isset($this->p4->pluck('val3')[0]) ? $this->p4->pluck('val3')[0] : 0];

    $pregunta4 = [
      "chart" => $type,
      "title" => ["text" => "¿Qué tan beneficioso considera usted que puede llegar a tener  una persona con limitaciones?"],
      "tooltip" => $tooltip,
      "plotOptions" => $plotOptions,
      "series" => [["name" => "Respuestas", "data" => [$r8, $r9, $r10]]]
    ];

    return view('home', compact('pregunta1', 'pregunta2', 'pregunta3', 'pregunta4'));
  }


}
