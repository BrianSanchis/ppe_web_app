<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartLine extends Model
{
    use HasFactory;

    protected $table = 'CartLine';
    protected $primaryKey = ['IdCart', 'IdProduct'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['IdCart', 'IdProduct', 'Price','Quantity'];

    public function products()
    {
        return $this->hasManyThrough(Product::class, CartLine::class, 'IdCart', 'IdProduct');
    }
}
