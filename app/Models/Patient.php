<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function suivis(){
        return $this->hasMany(Suivi::class);
    }

    public function typeDiabete(){
        return $this->belongsTo(TypeDiabete::class, 'typeDiabete_id');
    }

    public function traitement(){
        return $this->belongsTo(Traitement::class, 'traitement_id');
    }




    public function users(){
        return $this->belongsToMany(User::class,'patient_user');
    }
}
