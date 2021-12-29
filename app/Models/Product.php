<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_date',
        'product',
        'mid',
        'high_price',
        'midium_price',
        'low_price',
        'average_price',
        'trading_volume'
    ];

    public function market()
    {
        return $this->belongsTo('App\Models\Market','mid','id');
    }

    public function scopeSenior($high_price)
    {
        $high_price->where('high_price', '>', 70)
            ->orderBy('high_price');
    }
    public function scopeProduct($query, $product)
    {
        $query->where('product', '=', $product);
    }
}
