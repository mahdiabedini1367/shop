<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::query()->insert([
            ['title' =>'read_category' , 'label'=>'مشاهده دسته بندی ها'],
            ['title' =>'edit_category' , 'label'=>'ویرایش دسته بندی ها'],
            ['title' =>'create_category' , 'label'=>'ایجاد دسته بندی ها'],
            ['title' =>'delete_category' , 'label'=>'حذف دسته بندی ها'],

            ['title' =>'read_brand' , 'label'=>'مشاهده برندها'],
            ['title' =>'edit_brand' , 'label'=>'ویرایش برندها'],
            ['title' =>'create_brand' , 'label'=>'ایجاد برندها'],
            ['title' =>'delete_brand' , 'label'=>'حذف برندها'],

            ['title' =>'read_product' , 'label'=>'مشاهده محصولات'],
            ['title' =>'edit_product' , 'label'=>'ویرایش محصولات'],
            ['title' =>'create_product' , 'label'=>'ایجاد محصولات'],
            ['title' =>'delete_product' , 'label'=>'حذف محصولات'],

            ['title' =>'read_discount' , 'label'=>'مشاهده تخفیف ها'],
            ['title' =>'edit_discount' , 'label'=>'ویرایش تخفیف ها'],
            ['title' =>'create_discount' , 'label'=>'ایجاد تخفیف ها'],
            ['title' =>'delete_discount' , 'label'=>'حذف تخفیف ها'],

            ['title' =>'read_picture' , 'label'=>'مشاهده تصویر'],
            ['title' =>'edit_picture' , 'label'=>'ویرایش تصویر'],
            ['title' =>'create_picture' , 'label'=>'ایجاد تصویر'],
            ['title' =>'delete_picture' , 'label'=>'حذف تصویر'],

            ['title' =>'read_offer' , 'label'=>'مشاهده کد تخفیف'],
            ['title' =>'edit_offer' , 'label'=>'ویرایش کد تخفیف'],
            ['title' =>'create_offer' , 'label'=>'ایجاد کد تخفیف'],
            ['title' =>'delete_offer' , 'label'=>'حذف کد تخفیف'],

            ['title' =>'read_role' , 'label'=>'مشاهده نقش ها'],
            ['title' =>'edit_role' , 'label'=>'ویرایش نقش ها'],
            ['title' =>'create_role' , 'label'=>'ایجاد نقش ها'],
            ['title' =>'delete_role' , 'label'=>'حذف نقش ها'],


            ['title' =>'view_dashboard' , 'label'=>'مشاهده داشبورد'],

        ]);
    }
}
