<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;
    protected $fillable = [
        'market',
        'zone',
        'address'
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Player','mid');
    }

    public function scopeZone($query, $zone)
    {
        $query->where('zone', '=', $zone);
    }
}
