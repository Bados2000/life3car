<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class uslugi extends Model
{
    use HasFactory;
    public $table= "uslugi" ;

    
    protected $fillable = [
        'id',
        'typ_uslugi',
        'nazwa_uslugi',
        'czas_realizacji',
        'cena_brutto',
    ];
}
