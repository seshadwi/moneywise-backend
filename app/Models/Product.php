<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'thumbnail',
        'price',
        'status',
        'description',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'product_id', 'id');
    }
}
