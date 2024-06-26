<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Product';
    protected $primaryKey = 'IdProduct';
    public $incrementing = true;
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'IdCat');
    }
    public function quantity(){
        return $this->hasMany(CartLine::class, 'IdProduct', 'IdProduct');
    }
}
