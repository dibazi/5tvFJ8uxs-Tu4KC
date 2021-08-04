<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privee extends Model
{
    use HasFactory;

    protected $fillable = [

        'country',
        'city',
        'domaine',
        'position',
        'currency',
        'salary',
        'description',
        'dateFinal',
        'cvemail',

    ];
}
