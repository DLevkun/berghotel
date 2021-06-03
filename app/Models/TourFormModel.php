<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourFormModel extends Model {
    /*use HasFactory;*/
    public $timestamps = false;

    
    public function tours() {
        return $this->hasMany(Tours::class);
    }
}
