<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function consultation()
    {
        return $this->hasOne(Consultation::class);
    }
    public function mascot()
    {
        return $this->belongsTo(Mascot::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}

    

