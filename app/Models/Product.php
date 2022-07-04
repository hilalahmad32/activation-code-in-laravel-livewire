<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'domain',
        'product_id',
        'user_id',
        'key'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
