<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        return view('admin.produit.index');
    }
}