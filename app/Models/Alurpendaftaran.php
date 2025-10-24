<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alurpendaftaran extends Model
{
    protected $table = 'alurpendaftaran';
    protected $fillable = ['tahap', 'deskripsi', 'background'];
}
