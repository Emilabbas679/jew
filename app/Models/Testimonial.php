<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Testimonial extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['description', 'product_name'];
    protected $fillable = ['title', 'status', 'category_id', 'image', 'product_name'];
    
}
