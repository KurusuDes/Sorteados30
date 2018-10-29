<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticketshistory extends Model
{
  protected $table = 'tickets_history';
  protected $fillable = ['id','user_id','movementtype_id','movement_id','qty','observations'];
  protected $guarded = ['id'];
}
