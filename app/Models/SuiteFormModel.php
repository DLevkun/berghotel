<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuiteFormModel extends Model {
    /*use HasFactory;*/
    public $timestamps = false;

    public function suites() {
        return $this->hasMany(Rooms::class);
    }
}
