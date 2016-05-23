<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Pregunta1;
class HomeController extends Controller
{
  protected $p1;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Pregunta1 $p1)
    {
      $this->p1 = $p1;
        $this->middleware('auth');
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
      //dd($total->toArray());
      $yourFirstChart["chart"] = array("type" => "area");
      $yourFirstChart["title"] = array("text" =>
      "¿Alguna vez ha tenido problemas al comunicarse con alguna persona con limitaciones verbales?");
      $yourFirstChart["xAxis"] = array("categories" => ['Si', 'NO', 'GG']);
      $yourFirstChart["yAxis"] = array("title" => array("text" => "Fruit eaten"));
      $yourFirstChart["series"] = [
        array("name" => "Respuestas", "data" => [$total, $total1, $total2]),
      ];



    return view('home', compact('yourFirstChart'));
    }
}
