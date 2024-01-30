<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bestellingen extends Model
{
    use HasFactory;
    protected $table = 'Bestellingen';
    protected $fillable = ['klantaccount', 'menu', 'TotalePrijs', 'datum', 'status'];

    public function menu(){

        return $this->hasmany();

    }

    public function TotalePrijs()
    {
        return $this->hasMany(order::class);
    }

    public function status(){

        return $this->hasOne(status::class);
    }
}
