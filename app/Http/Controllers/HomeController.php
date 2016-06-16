<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Pregunta1;
use App\Pregunta2;
use App\Pregunta3;
use App\Pregunta4;
use App\Pregunta5;
use App\Pregunta6;
use App\Pregunta7;
use App\Pregunta8;
use App\Pregunta9;

class HomeController extends Controller
{
  protected $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9;
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct(Pregunta1 $p1, Pregunta2 $p2, Pregunta3 $p3, Pregunta4 $p4,
  Pregunta5 $p5, Pregunta6 $p6, Pregunta7 $p7, Pregunta8 $p8, Pregunta9 $p9)
  {
    $this->p1 = $p1;
    $this->p2 = $p2;
    $this->p3 = $p3;
    $this->p4 = $p4;
    $this->p5 = $p5;
    $this->p6 = $p6;
    $this->p7 = $p7;
    $this->p8 = $p8;
    $this->p9 = $p9;
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
    //---------------------------------------------------------------------------------------------------------------------------
    $r11 = ["name"=> "Si", "y" => isset($this->p5->pluck('val1')[0]) ? $this->p5->pluck('val1')[0] : 0];
    $r12 = ["name"=> "No", "y" => isset($this->p5->pluck('val2')[0]) ? $this->p5->pluck('val2')[0] : 0];

    $pregunta5 = [
      "chart" => $type,
      "title" => ["text" => "¿Estaría dispuesto comprar  este dispositivo?"],
      "tooltip" => $tooltip,
      "plotOptions" => $plotOptions,
      "series" => [["name" => "Respuestas", "data" => [$r11, $r12]]]
    ];
    //---------------------------------------------------------------------------------------------------------------------------
    $r13 = ["name"=> "₡1.500.000", "y" => isset($this->p6->pluck('val1')[0]) ? $this->p6->pluck('val1')[0] : 0];
    $r14 = ["name"=> "₡1.000.000", "y" => isset($this->p6->pluck('val2')[0]) ? $this->p6->pluck('val2')[0] : 0];
    $r15 = ["name"=> "₡2.000.000", "y" => isset($this->p6->pluck('val3')[0]) ? $this->p6->pluck('val3')[0] : 0];
    $r16 = ["name"=> "Otro", "y"       => isset($this->p6->pluck('val3')[0]) ? $this->p6->pluck('val3')[0] : 0];

    $pregunta6 = [
      "chart" => $type,
      "title" => ["text" => "¿Cuánto está dispuesto pagar por este medio?"],
      "tooltip" => $tooltip,
      "plotOptions" => $plotOptions,
      "series" => [["name" => "Respuestas", "data" => [$r13, $r14, $r15, $r16]]]
    ];
    //---------------------------------------------------------------------------------------------------------------------------
    $r17 = ["name"=> "Escuelas", "y" => isset($this->p7->pluck('val1')[0]) ? $this->p7->pluck('val1')[0] : 0];
    $r18 = ["name"=> "Público en general", "y" => isset($this->p7->pluck('val2')[0]) ? $this->p7->pluck('val2')[0] : 0];
    $r19 = ["name"=> "Colegios", "y" => isset($this->p7->pluck('val3')[0]) ? $this->p7->pluck('val3')[0] : 0];
    $r20 = ["name"=> "Otro", "y"       => isset($this->p7->pluck('val3')[0]) ? $this->p7->pluck('val3')[0] : 0];

    $pregunta7 = [
      "chart" => $type,
      "title" => ["text" => "¿Dónde cree usted que se podría empezar a implementar éste tipo de dispositivos?"],
      "tooltip" => $tooltip,
      "plotOptions" => $plotOptions,
      "series" => [["name" => "Respuestas", "data" => [$r17, $r18, $r19, $r20]]]
    ];
    //---------------------------------------------------------------------------------------------------------------------------
    $r21 = ["name"=> "Sí", "y" => isset($this->p8->pluck('val1')[0]) ? $this->p8->pluck('val1')[0] : 0];
    $r22 = ["name"=> "No", "y" => isset($this->p8->pluck('val2')[0]) ? $this->p8->pluck('val2')[0] : 0];

    $pregunta8 = [
      "chart" => $type,
      "title" => ["text" => "¿Considera usted necesario esta tecnología para algunas personas con  discapacidades?"],
      "tooltip" => $tooltip,
      "plotOptions" => $plotOptions,
      "series" => [["name" => "Respuestas", "data" => [$r21, $r22]]]
    ];
    //---------------------------------------------------------------------------------------------------------------------------
    $r23 = ["name"=> "Sí", "y" => isset($this->p9->pluck('val1')[0]) ? $this->p9->pluck('val1')[0] : 0];
    $r24 = ["name"=> "No", "y" => isset($this->p9->pluck('val2')[0]) ? $this->p9->pluck('val2')[0] : 0];

    $pregunta9 = [
      "chart" => $type,
      "title" => ["text" => "¿Recomendaría la aplicación de dicho producto que ayuda al bienestar de las personas con limitaciones?"],
      "tooltip" => $tooltip,
      "plotOptions" => $plotOptions,
      "series" => [["name" => "Respuestas", "data" => [$r23, $r24]]]
    ];
    return view('home', compact('pregunta1', 'pregunta2', 'pregunta3', 'pregunta4',
  'pregunta5', 'pregunta6', 'pregunta7', 'pregunta8', 'pregunta9'));
  }

  public function store1(Request $request)
  {
      $pregunta1 = new Pregunta1();
      $pregunta1->val1 = $request->si;
      $pregunta1->val2  = $request->no;
      $pregunta1->val3  = $request->a_veces;
      $pregunta1->save();
      return redirect('home');
  }
  //----------------------------------------------------------
  public function store2(Request $request)
  {
      $pregunta2 = new Pregunta2();
      $pregunta2->val1 = $request->si;
      $pregunta2->val2  = $request->no;
      $pregunta2->save();
      return redirect('home');
  }
  //----------------------------------------------------------
  public function store3(Request $request)
  {
      $pregunta3 = new Pregunta3();
      $pregunta3->val1 = $request->si;
      $pregunta3->val2  = $request->no;
      $pregunta3->save();
      return redirect('home');
  }
  //----------------------------------------------------------
  public function store4(Request $request)
  {
      $pregunta4 = new Pregunta4();
      $pregunta4->val1 = $request->bastante;
      $pregunta4->val2  = $request->poco;
      $pregunta4->val3  = $request->nada;
      $pregunta4->save();
      return redirect('home');
  }
  //----------------------------------------------------------
  public function store5(Request $request)
  {
      $pregunta5 = new Pregunta5();
      $pregunta5->val1 = $request->si;
      $pregunta5->val2  = $request->no;
      $pregunta5->save();
      return redirect('home');
  }
  //----------------------------------------------------------
  public function store6(Request $request)
  {
      $pregunta6 = new Pregunta6();
      $pregunta6->val1 = $request->one;
      $pregunta6->val2  = $request->two;
      $pregunta6->val3 = $request->three;
      $pregunta6->val4  = $request->other;
      $pregunta6->save();
      return redirect('home');
  }
  //----------------------------------------------------------
  public function store7(Request $request)
  {
    $pregunta7 = new Pregunta7();
    $pregunta7->val1 = $request->escuela;
    $pregunta7->val2  = $request->colegio;
    $pregunta7->val3 = $request->general;
    $pregunta7->val4  = $request->other;
    $pregunta7->save();
    return redirect('home');
  }
  //----------------------------------------------------------
  public function store8(Request $request)
  {
      $pregunta8 = new Pregunta8();
      $pregunta8->val1 = $request->si;
      $pregunta8->val2  = $request->no;
      $pregunta8->save();
      return redirect('home');
  }
  //----------------------------------------------------------
  public function store9(Request $request)
  {
      $pregunta9 = new Pregunta9();
      $pregunta9->val1 = $request->si;
      $pregunta9->val2  = $request->no;
      $pregunta9->save();
      return redirect('home');
  }
}
