<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winkelmandje extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'pizza',
        'ingredient',
        'prijs',
        'hoeveelheid',
        'grootte',
    ];
    public function menuPrijs() : float
    {
        return $this->prijs * $this->grootte;
    }
}
