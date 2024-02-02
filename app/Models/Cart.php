<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'Cart';
    protected $primaryKey = 'IdCart';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = ['id'];

    public function user(): HasOne{
        return $this->hasOne(User::class,'id','id');
    }
}
