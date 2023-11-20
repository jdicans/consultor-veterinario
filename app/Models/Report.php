<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $guarded = [];
        public function consultation()
        {
            return $this->belongsTo(Consultation::class);
        }
    
        public function professional()
        {
            return $this->belongsTo(Professional::class);
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
