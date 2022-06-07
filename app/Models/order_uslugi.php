<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Laravel\Sanctum\HasApiTokens, \Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order_uslugi extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = "order_uslugi";


    protected $fillable = [
        'order_id',
        'uslugi_id',
        'liczba'
    ];


}
