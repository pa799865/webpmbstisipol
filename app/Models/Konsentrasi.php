<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsentrasi extends Model
{
    protected $table = 'konsentrasis';

    protected $fillable = [
    'img',
    'judul',
    'deskripsi',
    'akreditasi',
    'konsentrasi1',
    'konsentrasi2',
    'konsentrasi3',
    'konsentrasi4',
    'konsentrasi5',
    'background_card',
    'background_akreditasi',
    'background_konsentrasi',
    'background_akreditasi2',
    ];
}
