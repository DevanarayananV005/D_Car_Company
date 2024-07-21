<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'type',
        'brand',
        'name',
        'model',
        'mileage',
        'price',
        'file'
    ];
}
