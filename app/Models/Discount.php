<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable=['value'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
