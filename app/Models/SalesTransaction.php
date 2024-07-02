<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesTransaction extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'quantity_sold'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
