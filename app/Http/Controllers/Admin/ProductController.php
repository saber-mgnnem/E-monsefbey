<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    //
    public function index(){
        $product = Product::all();

        return view('admin.product.index',compact('product'));
    }
    public function add(){
        $category = Category::all();

        return view('admin.product.add' ,compact('category'));
    }
    public function insert(Request $request){
       
        $product = new Product();
       
        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->Small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->tax = $request->input('tax');
        $product->qty = $request->input('qty');

        $product->status = $request->input('status') ==TRUE ?'1':'0';
        $product->trending = $request->input('trending') ==TRUE ?'1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->meta_description = $request->input('meta_description');
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product', $filename);
            $product->image=$filename;
        }
        $product->save();
        return redirect('products')->with('add-status','produit ajoutée avec succès');

        

    }


    public function edit($id){
        $product = Product::Find($id);
       return view('admin.product.edit' , compact('product'));
    }


    public function update(Request $request,$id){

        $product = Product::Find($id);

        if($request->hasFile('image'))
        {
            $path ='assets/uploads/product'.$product->image;
            if(File::exists ($path))
            {
                File::delete('assets/uploads/product'.$product->image);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product', $filename);
            $product->image=$filename;
        }
    
         
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->Small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->tax = $request->input('tax');
        $product->qty = $request->input('qty');

        $product->status = $request->input('status') ==TRUE ?'1':'0';
        $product->trending = $request->input('trending') ==TRUE ?'1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->meta_description = $request->input('meta_description');
        $product->save();


        return redirect('products')->with('status','produit modifier avec succès');
    }
    public function destroy($id){
        $product = Product::find($id);
     if($product->image)
     {
        $path ='assets/uploads/category'.$product->image;
        if(File::exists ($path))
        {
           File::delete('public/assets/uploads/product'.$product->image);
        } 
        $product->delete();  
      }
      return redirect('products')->with('status','Produit supprimer avec succès');

   }
}
