<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class uslugi extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table= "uslugi" ;

    
    protected $fillable = [
        'id',
        'typ_uslugi',
        'nazwa_uslugi',
        'czas_realizacji',
        'cena_brutto',
    ];
}
