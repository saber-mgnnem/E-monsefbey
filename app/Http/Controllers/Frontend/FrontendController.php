<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Product;
use App\Models\Category;
class FrontendController extends Controller
{

    public function index(){
        $featured_products = Product::where('trending','1')->take(10)->get();
        foreach ($featured_products as $product) {
            $original_price = $product->original_price;
            $selling_price = $product->selling_price;
            $discount_percentage = ($original_price - $selling_price) / $original_price * 100;
            $product->discount_percentage = round($discount_percentage);
        }

        $category = Category::where('popular','1')->take(10)->get();

        return view("frontend.index",compact('featured_products','category'));
    }
    public function category(){
      $category = Category::where('status','0')->take(10)->get();

      return view('frontend.category',compact('category'));
    }

    public function viewcategory($id)
    {
        if(Category::where('id',$id)->exists()){
          $category = Category::where('id',$id)->first();
          $product = Product::where('cate_id',$category->id )->where('status','0')->get();

          return view('frontend.products.index',compact('category','product'));

        }
        else{
          return redirect('/')->with('status','slug dose not existe');
        }

    }

    public function viewproduct($cate_slug,$prod_slug){
      if(Category::where('slug',$cate_slug)->exists()){
              if(Product::where('slug',$prod_slug)->exists()){
                     $product=Product::where('slug',$prod_slug)->first();
                     return view('frontend.products.view',compact('product'));

              }
              else{
                return redirect('/')->with('status','slug dose not existe');

              }
      }
      else{
        return redirect('/')->with('status','slug dose not existe');

      }
    }
}
