<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medewerker extends Model
{
    use HasFactory;
    protected $fillable = ['voornaam', 'achternaam', 'inkomen', 'functie'];
}
