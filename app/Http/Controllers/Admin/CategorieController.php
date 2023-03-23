<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;
use App\Repository\CategoryInterface;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class CategorieController extends Controller
{

    protected $categoryRepository;

    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categorie =$this->categoryRepository->all();
        return view('admin.categorie.index',compact('categorie'));
    }

    public function create()
    {
        return view('admin.categorie.create');
    }

    public function store(CategorieRequest $request){
        Categorie::insert([
            'name'=>$request->name,
            'slug'=> strtolower(str_replace(' ','-',$request->name))
        ]);
        Toastr::success('Votre élément a été créé avec succès.', 'Succès');
        return redirect()->route('categorie');
    }

    public function edit (){

    }

    public function update(){

    }
}
