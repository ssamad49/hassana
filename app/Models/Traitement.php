<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Patient(){
        return $this->hasMany(Patient::class);
    }
}
