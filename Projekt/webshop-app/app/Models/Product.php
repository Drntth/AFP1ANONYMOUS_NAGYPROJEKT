<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'sale_price',
        'category_id',
        'stock',
        'image'
    ];
    public function scopeSortBy($query, $sort)
    {
        switch ($sort) {
            case 'cheapest':
                return $query->orderByRaw('IF(stock > 0 AND stock < 4, sale_price, price) ASC');
            case 'expensive':
                return $query->orderByRaw('IF(stock > 0 AND stock < 4, sale_price, price) DESC');
            case 'name_asc':
                return $query->orderBy('name', 'ASC');
            case 'name_desc':
                return $query->orderBy('name', 'DESC');
            case 'newest':
                return $query->orderBy('created_at', 'DESC');
            case 'on_sale':
                return $query->orderByRaw('stock > 0 AND stock < 4 DESC, sale_price ASC');
            default:
                return $query->orderBy('name', 'ASC');
        }
    }
}
