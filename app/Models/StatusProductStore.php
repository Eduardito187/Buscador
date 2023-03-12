<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusProductStore extends Model
{
    use HasFactory;

    protected $table = 'status_store_product';

    protected $fillable = ['id_store', 'id_product', 'status'];

    public $incrementing = false;
    public $timestamps = false;
}
