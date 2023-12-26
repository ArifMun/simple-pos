<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventories extends Model
{
    use HasFactory;
    protected $table = 'inventories';

    protected $fillable = [
        'code',
        'name',
        'price',
        'stock',
    ];
}
