<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function products(Request $req){
    // //    return $req->all();

    //      $product = new Product();
    //      $product->name = $req->has('name')?$req->get('name'):'';
    //      $product->price = $req->has('price')?$req->get('price'):'';
    //      $product->amount = $req->has('amount')?$req->get('amount'):'';
    //      $product->is_active = 1;

    //     $product->save();
    //     return back()->with('success','Product Successfully Saved!');



    // }

    public function pagi(){
        $products =Product::paginate(3);
        dd($products);
        return view ('products',compact('products'));
    }

    public function product(Request $req){
         $product = new Product();
         $product->name = $req->has('name')?$req->get('name'):'';
         $product->price = $req->has('price')?$req->get('price'):'';
         $product->amount = $req->has('amount')?$req->get('amount'):'';
         $product->is_active = 1;
         
    
        if($req->hasFile('images')){
            $files = $req->file('images');
            $imageLocation = array();
            $i = 0;
    
            foreach($files as $file){
                $extension = $file->getClientOriginalExtension();
                $fileName = 'product_' . time() . $i++ . '.' . $extension;
                $location = '/images/uploads/';
                $file->move(public_path() . $location, $fileName);
                $imageLocation[] = $location . $fileName;
            }
            $product->image = implode(' | ', $imageLocation);
        }
    
        if($product->save()){
            return back()->with('success', 'Product Successfully Saved!');
        } else {
            return back()->with('error', 'Product was not Successfully Saved');
        }
    }
    
    
    public function addProduct(){
       

        $products = Product::all();

        $returnProducts = array();

        foreach( $products as $product){
            $images= explode('|', $product->image);

            $returnProducts[]=[

                'name'=>$product->name,
                'price'=>$product->price,
                'amount'=>$product->amount,
                'image'=>$images[0]


            ];
        }
          return view('add_product',compact('returnProducts'));
    }

    
}
