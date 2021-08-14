<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companie extends Model
{
    protected $fillable = [

        'companyName',
        'country',
        'province',
        'city',
        'adress',
        'companyTel',
        'domaine',
        'position',
        'currency',
        'salary',
        'description',
        'dateFinal',
        'cvemail',

    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
