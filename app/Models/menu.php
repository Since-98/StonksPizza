<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table ='menu';

    protected $fillable = ['pizza', 'plaatje', 'ingrediënten', 'grootte', 'prijs'];

    public function bestellingen()
{
    return $this->belongsToMany(Bestellingen::class, 'bestellingen_menu', 'menu_id', 'bestelling_id');
}
}

