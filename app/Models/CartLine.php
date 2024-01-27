<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartLine extends Model
{
    use HasFactory;

    protected $table = 'CartLine';
    protected $primaryKey = 'IdCart';
    public $incrementing = false;
    public $timestamps = false;
}
