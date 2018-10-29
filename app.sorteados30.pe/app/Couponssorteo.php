<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couponssorteo extends Model
{
  protected $table = 'coupons_sorteo';
  protected $fillable = ['coupon_participant_id','coupon_id','optionnumber','user_id','documentnumber','name'];
  protected $guarded = ['coupon_participant_id','coupon_id','optionnumber'];
}
