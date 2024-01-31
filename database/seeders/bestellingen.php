<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bestellingen extends Model
{
    use HasFactory;
    protected $table = 'Bestellingen';
    protected $fillable = ['datum', 'status'];

    public function menu()
    {
        return $this->belongsToMany(Menu::class, 'bestellingen_menu', 'bestelling_id', 'menu_id');
    }

    public function totalePrijs(){
    $winkelmandjes = $this->winkelmandjes;

    if ($winkelmandjes) {
        return $winkelmandjes->sum(function ($winkelmandje) {
            return $winkelmandje->menuPrijs();
        });
    }

}
}
