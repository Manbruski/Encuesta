<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Pregunta1;
use App\Pregunta2;
class HomeController extends Controller
{
  protected $p1, $p2;
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct(Pregunta1 $p1, Pregunta2 $p2)
  {
    $this->p1 = $p1;
    $this->p2 = $p2;
    
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {

    $total = $this->p1->pluck('val1');
    $total1 = $this->p1->pluck('val2');
    $total2 = $this->p1->pluck('val3');
    //
    $t3 = ["name"=> "Si", "y" => $total[0]];
    $t4 = ["name"=> "No", "y" => $total1[0]];
    $t5 = ["name"=> "Algunas veces", "y" => $total2[0]];
    //dd($total->toArray());
    $yourFirstChart["chart"] = array("type" => "pie");
    $yourFirstChart["title"] = array("text" =>
    "¿Alguna vez ha tenido problemas al comunicarse con alguna persona con limitaciones verbales?");
    $yourFirstChart["tooltip"] = array("pointFormat" =>  "{series.name}: <b>{point.percentage:.1f}%</b>");
    $yourFirstChart["plotOptions"]  = array(
      "pie" => array(
        "allowPointSelect" => true,
        "cursor" => "pointer",
        "dataLabels" => array("enabled" => false),
        "showInLegend" => "true")
      );
      $yourFirstChart["series"] = [
        array("name" => "Respuestas", "data" => [$t3, $t4, $t5]),
      ];
      $hola = "Hola mundo";
      //---------------------------------------------------------------------------------------------------------------------------

      $t1 = $this->p2->pluck('val1');
      $t2 = $this->p2->pluck('val2');
      $yourSecondChart["chart"] = array("type" => "bar");
      $yourSecondChart["title"] = array("text" =>
      "¿Conoce algún caso de una persona con parálisis que le impida hablar o comunicarse?");
      $yourSecondChart["xAxis"] = array("categories" => ['Si', 'NO', 'GG']);
      $yourSecondChart["yAxis"] = array("title" => array("text" => "Fruit eaten"));
      $yourSecondChart["series"] = [array("name" => "Respuestas", "data" => [$t1, $t2])];

      return view('home', compact('yourFirstChart', 'yourSecondChart'));
    }
  }
