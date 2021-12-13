<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name'
    ];

    public function country(){
        return $this->belongsTo(Country::class, 'id','country_id');
    }

    public function city(){
        return $this->hasMany(City::class, 'state_id', 'id');
    }
}
