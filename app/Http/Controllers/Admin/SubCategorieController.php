<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategorieRequest;
use App\Models\Categorie;
use App\Models\SubCategory;
use App\Repository\subCategoryRepository\SubCategoryInterface;
use App\Repository\subCategoryRepository\SubCategoryRepository;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class SubCategorieController extends Controller
{

    protected $subCategory;

    public function __construct(SubCategoryInterface $subCategory)
    {
        $this->subCategory = $subCategory;
    }

    public function index()
    {
        $subCategory = $this->subCategory->all();
        return view('admin.subcategorie.index',compact('subCategory'));
    }

    public function create()
    {
        $category = Categorie::latest()->get();
        return view('admin.subcategorie.create',compact('category'));
    }

    public function store(SubCategorieRequest $request){
        SubCategory::insert([
            'sub_name'=>$request->sub_name,
            'product_count'=>$request->product_count,
            'categorie_id'=>$request->categorie_id,
            'slug'=> strtolower(str_replace(' ','-',$request->sub_name))
        ]);
        Toastr::success('Votre élément a été créé avec succès.', 'Succès');
        return redirect()->route('subcategorie');
    }

    public function edit($id){
        $subcategory = $this->subCategory->find($id);
        $category = Categorie::latest()->get();
        return view('admin.subcategorie.edit',compact(['category','subcategory']));

    }

    public function update(SubCategorieRequest $request,$id){
        SubCategory::findOrFail($id)->update([
            'sub_name'=>$request->sub_name,
            'product_count'=>$request->product_count,
            'categorie_id'=>$request->categorie_id,
            'slug'=> strtolower(str_replace(' ','-',$request->sub_name))
        ]);
        $category_id = $request->categorie_id;
        Categorie::where('id',$category_id)->increment('sub_category_count',1);
        Toastr::success('Votre élément a été modifié avec succès.', 'Succès');
        return redirect()->route('subcategorie');
    }

    public function destroy($id){
        $this->subCategory->delete($id);
        Toastr::success('Votre élément a été supprimer avec succès.', 'Succès');
        return redirect()->route('subcategorie');
    }
}
