<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Saler;
use App\Models\Scopes\OrderScope;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock_quantity',
        'saler_id',
    ];

    public function saler()
    {
        return $this->belongsTo(Saler::class);
    }

    public function scopeStockAvailable($q, $quantity=0){
        return $q->where("stock_quantity", ">", $quantity);
    }

    public static function booted(){
        static::addGlobalScope(new OrderScope);
    }
}
