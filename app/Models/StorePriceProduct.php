<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorePriceProduct extends Model
{
    use HasFactory;

    protected $table = 'store_price_product';

    protected $fillable = ['id_price', 'id_store', 'id_product'];

    public $incrementing = false;
    public $timestamps = false;
}
