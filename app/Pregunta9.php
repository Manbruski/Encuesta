<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta9 extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'pregunta9';

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['id', 'val1', 'val2'];
  public $timestamps = false;
  protected $dates = ['deleted_at'];
}
