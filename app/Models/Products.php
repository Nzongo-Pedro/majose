<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_category',
        'id_subcategory',
        'id_size',
        'id_color',
        'id_gender',
        'id_old',
        'name',
        'price',
        'discount',
        'desription'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'id_category');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategories::class, 'id_subcategory');
    }

    public function size()
    {
        return $this->belongsTo(Sizes::class, 'id_size');
    }

    public function color()
    {
        return $this->belongsTo(Colors::class, 'id_color');
    }

    public function gender()
    {
        return $this->belongsTo(Genders::class, 'id_gender');
    }

    public function old()
    {
        return $this->belongsTo(Olds::class, 'id_old');
    }
}
