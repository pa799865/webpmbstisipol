<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricingcard extends Model
{
    protected $fillable = ['badge', 'title', 'description', 'price', 'period', 'tipe'];
}
