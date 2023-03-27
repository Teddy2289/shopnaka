<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','log_desc','short_desc','price','categorie_id','sub_categorie_id','image','string','quantite'];

    public function categories()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function subCategories()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
