<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;
   
    protected $guarded = [];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
    
    

}