<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class cars extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id_cars',
        'marka',
        'model',
        'generacja',
    ];

    public function profiles(): HasMany
    {
        return $this->hasMany(Profile::class);
    }

}
