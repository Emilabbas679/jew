<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title','about'];
    protected $guarded = [];


    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function color()
    {
        return $this->hasOne(Color::class,'id', 'color_id');
    }
    public function occasion()
    {
        return $this->hasOne(Occasion::class,'id', 'occasion_id');
    }
    public function designer()
    {
        return $this->hasOne(Designer::class,'id', 'designer_id');
    }
    public function Material()
    {
        return $this->hasOne(Material::class,'id', 'material_id');
    }

}
