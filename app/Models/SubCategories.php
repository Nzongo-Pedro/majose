<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    protected $fillable = ['id_category', 'name'];

    public function subcategory()
    {
        return $this->hasMany(SubCategories::class, 'id');
    }

}
