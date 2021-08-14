<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PriveeController;

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
    public function user(){
        return $this->belongsTo(User::class);
    }
}
