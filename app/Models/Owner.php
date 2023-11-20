<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Owner extends Model
{
   
    use HasFactory;
     protected $guarded = [];

    public function reports()
    {
        return $this->hasMany(Report::class);
    
    }
    public function citations()
    {
        return $this->hasMany(Citation::class);
    }
    public function mascots()
    {
        return $this->hasMany(Mascot::class);
    }

        }
     
