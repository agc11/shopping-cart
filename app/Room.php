<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
      'name',
      'price_norefundable',
      'price_refundable',
      'services'
    ];
}
