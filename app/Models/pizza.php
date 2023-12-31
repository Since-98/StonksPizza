<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pizza extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'photo_path', 'daily_special', 'special_date'];

}
