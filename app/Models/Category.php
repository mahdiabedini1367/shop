<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table='categories';

    protected $fillable = [
        'title',
        'category_id'
    ];

    protected $guarded = [
        'id',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function getAllSubCategoryProducts()
    {
        $childrenIds = $this->children()->pluck('id');

        return Product::query()
            ->whereIn('category_id', $childrenIds)
            ->orWhere('category_id', $this->id)
            ->get();
    }

    public function getHasChildrenAttribute()
    {
        $this->children()->count() > 0;
    }

    public function propertyGroups()
    {
        return $this->belongsToMany(PropertyGroup::class,'category_property_group');
    }

    public function hasPropertyGroup(PropertyGroup $propertyGroup)
    {
        return $this->propertyGroups()
                    ->where('property_group_id',$propertyGroup->id)
                    ->exists();
    }
}
