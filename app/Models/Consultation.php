<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $guarded = [];
 

    public function reports()
    {
        return $this->hasMany(Report::class);
    }


    public function citation()
    {
        return $this->belongsTo(Citation::class);
    }

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }




}
