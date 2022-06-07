<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class realizacja1 extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = "realizacje_jeden";


    protected $fillable = [
        'id',
        'typ_realizacji',
        'car',
        'wykonano',
    ];
}
