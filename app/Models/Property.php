<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table='properties';

    protected $guarded=[];
    protected $fillable=['title','property_group_id'];

    public function propertyGroup()
    {
        return $this->belongsTo(PropertyGroup::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'product_property')
                    ->withPivot(['value'])
                    ->withTimestamps();
    }

    public function getValueForProduct(Product $product)
    {
        $productPropertyQuery = $this->products()->where('product_id',$product->id);

        return  !$productPropertyQuery->exists()? null : $productPropertyQuery->first()->pivot->value;
    }
}
