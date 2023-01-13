<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function view(Product $product){
            $product = DB::table('product')->get();
        return view('review-page', compact('product'));
    }
    
    public function store(Request $request){
        $request->validate([
            'productImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        DB::table('product')->insert([
            'productImage' => $request->productImage,
            'productCategory' => $request->productCategory,
            'subCategory' => $request->subCategory,
            'brand_name' => $request->brand_name,
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
        ]);

        if ($image = $request->file('productImage')) {
            $destinationPath = '/image/products/';
            $image->move($destinationPath);
        }
        return redirect()->route('review');
    }

    public function show(Product $product){
        return view('product-show', compact('product'));
    }

}
