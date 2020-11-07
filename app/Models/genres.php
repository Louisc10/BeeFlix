<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;
    public function Movie()
    {
        return $this->belongsTo('App\Models\Movies');
    }
}
