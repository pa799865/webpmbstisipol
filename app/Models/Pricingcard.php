<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricingcard extends Model
{
    protected $fillable = ['badge', 'title', 'description', 'price', 'period', 'special', 'special1', 'special2', 'special3', 'special4', 'special5', 'special6', 'tipe'];
}
