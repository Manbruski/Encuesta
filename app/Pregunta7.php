<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta7 extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'pregunta7';

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['id', 'val1', 'val2', 'val3', 'val4'];
  public $timestamps = false;
  protected $dates = ['deleted_at'];
}
