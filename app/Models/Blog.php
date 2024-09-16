<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Blog extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = 'blog';


    public $translatable = ['title', 'description'];
    protected $fillable = ['title', 'status', 'description', 'image'];

}
