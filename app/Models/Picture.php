<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable =[ 'product_id', 'path', 'mime', 'size'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
