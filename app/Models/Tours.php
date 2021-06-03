<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    /*use HasFactory;*/
    public $timestamps = false;

    public function tourform() {
        return $this->belongsTo(TourFormModel::class);
    }
}
