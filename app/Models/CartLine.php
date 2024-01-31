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

    protected $fillable = ['IdCart', 'IdProduct', 'Quantity'];

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'IdCart', 'IdCart');
    }
}
