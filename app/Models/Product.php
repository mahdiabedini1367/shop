<?php

namespace App\Models;

use App\Http\Requests\Admin\DiscountRequest;
use App\Http\Requests\ProductPictureRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $table='products';


    protected $fillable = ['category_id', 'brand_id', 'name', 'slug', 'cost', 'image', 'description'];
    protected $guarded = ['id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function addPicture(ProductPictureRequest $request)
    {
        $path = $path = $request->file('image')->store('public/image/products');;
        $this->pictures()->create([
            'path' => $path,
            'mime' => $request->file('image')->getClientMimeType(),
            'size' => $request->file('image')->getSize(),
        ]);
    }

    public function deletePicture(Picture $picture)
    {
        Storage::delete($picture->path);
        $picture->delete();
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function addDiscount(DiscountRequest $request)
    {
        if (!$this->discount()->exists()) {
            $this->discount()->create([
                'value' => $request->get('value'),
            ]);
        } else {
            $this->discount->update([
                'value' => $request->get('value'),
            ]);
        }
    }

    public function hasDiscount()
    {
        return $this->discount()->exists();
    }

    public function deleteDiscount()
    {
        $this->discount()->delete();
    }

    public function costWithDiscount()
    {
        if (!$this->hasDiscount())
            return $this->cost;

        return $this->cost - ($this->cost * ($this->discount->value / 100));
    }

//    فیلد مجازی برای اینکار باید یک get به ابتدای اون تابع اضافه کنیم,و در انتها کلمه Attribute را اضافه کنیم
//             برای استفاده در سمت کلاینت باید بنویسیم cost_with_discount
    public function getCostWithDiscountAttribute()
    {
        return (!$this->hasDiscount()) ?  $this->cost :  $this->cost - ($this->cost * ($this->discount->value / 100));
    }

    public function getHasDiscountAttribute()
    {
        return $this->discount()->exists();
    }

    public function getDiscountValueAttribute()
    {
        return $this->has_discount ? $this->discount->value : null;
    }


}
