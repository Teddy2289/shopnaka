<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected  $fillable = ['sub_name','categorie_id','slug','product_count'];

    public function produits()
    {
        return $this->hasMany(Product::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
