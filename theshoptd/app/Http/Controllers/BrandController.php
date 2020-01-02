<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
class BrandController extends Controller
{
    public function index(){
        return view('back-end.brand.add-brand');
    }

    public function saveBrand(Request $request){
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand')->with('message', '1 Brand information saved successfully');
    }

    public function manageBrand(){
        $brads = Brand::all();
        return view('back-end.brand.manage-brand',['brads'=>$brads]);
    }
    
    public function unpublishedBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 0;
        $brand->save();
        return redirect('/brand/manage')->with('message', '1 Brand information Unpublished');
    }

    public function publishedBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 1;
        $brand->save();
        return redirect('/brand/manage')->with('message', '1 Brand information Published');
    }
    
    public function editBrand($id){
        $brand = Brand::find($id);
        return view('back-end.brand.edit-brand',[ 'brand'=>$brand ]);
    }
    
    public function deleteBrand($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/brand/manage')->with('message', '1 Brand record Deleted');
    }
    
    public function updateBrand(Request $request){
        $brand_id = $request->brand_id;
        $brand = Brand::find($brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand/manage')->with('message', 'Brand Updated');
    }


}
