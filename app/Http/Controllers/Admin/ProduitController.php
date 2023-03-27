<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        return view('admin.produit.index');
    }

    public function create()
    {
        $category = Categorie::latest()->get();
        $subcategory = SubCategory::latest()->get();
        return view('admin.produit.create',compact('category','subcategory'));
    }
}
