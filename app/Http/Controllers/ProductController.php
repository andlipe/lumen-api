<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $products = Products::all();

     return response()->json($products);

    }

     public function create(Request $request)
     {
    $product = new Products;

       $product->name= $request->name;
       $product->price = $request->price;
       $product->description= $request->description;
       
       $product->save();

       return response()->json($product);
     }

     public function show($id)
     {
        $product = Products::find($id);

        return response()->json($product);
     }

     public function update(Request $request, $id)
     { 
        $product= Products::find($id);
        
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return response()->json($product);
     }

     public function destroy($id)
     {
        $product = Products::find($id);
        $product->delete();

         return response()->json('product removed successfully');
     }


    }
