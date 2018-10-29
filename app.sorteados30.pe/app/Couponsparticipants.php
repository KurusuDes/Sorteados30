<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couponsparticipants extends Model
{
  protected $table = 'coupons_participants';
  protected $fillable = ['id','coupon_id','user_id','number_options'];
  protected $guarded = ['id'];
}
