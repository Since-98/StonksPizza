<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bestellingen extends Model
{
    use HasFactory;
    protected $table = 'Bestellingen';
    protected $fillable = ['datum','totaalprijs', 'status','pizza'];

    public function CartItem()
    {
        return $this->belongsToMany(CartItem::class, 'bestellingen_cart_items','bestelling_id', 'cart_items_id');
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
