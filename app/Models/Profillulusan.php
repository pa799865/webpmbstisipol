<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profillulusan extends Model
{
    protected $table = 'profillulusans';

    protected $fillable = [
        'img',
        'judul',
        'deskripsi',
        'list1',
        'list2',
        'list3',
        'list4',
        'list5',
        'list6',
        'list7',
        'list8',
        'list9',
        'list10',
        'background',
    ];
}
