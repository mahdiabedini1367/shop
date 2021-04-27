<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'category_id'
    ];

    protected $guarded=[
      'id',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class,'category_id');
    }
}
