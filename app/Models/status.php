<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(bestelling::class);
    }
}
