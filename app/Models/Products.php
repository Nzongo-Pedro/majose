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
        'id_brand',
        'id_size',
        'id_color',
        'id_gender',
        'id_old',
        'name',
        'price',
        'discount',
        'desription'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'id_category')->select('id', 'name');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategories::class, 'id_subcategory')->select('id', 'name');
    }

    public function size()
    {
        return $this->belongsTo(Sizes::class, 'id_size')->select('id', 'name', 'code');
    }

    public function color()
    {
        return $this->belongsTo(Colors::class, 'id_color')->select('id', 'code', 'name');
    }

    public function gender()
    {
        return $this->belongsTo(Genders::class, 'id_gender')->select('id', 'gender');
    }

    public function old()
    {
        return $this->belongsTo(Olds::class, 'id_old')->select('id', 'old');
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class, 'id_brand')->select('id', 'name');
    }
}
