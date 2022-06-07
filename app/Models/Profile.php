<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','town', 'street', 'houseNumber', 'zipcode', 'car_id'];

    public function cars()
    {
        $kox='car_id';
        return $this->hasOne(cars::class, 'id_cars');
    }
}


