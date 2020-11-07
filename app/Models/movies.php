<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    public function Genre()
    {
        return $this->hasOne('App\Models\Genres');
    }

    public function Episode()
    {
        return $this->hasMany('App\Models\Episodes');
    }
}
