<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table("products")->get();
       return view('product.index' , ['data'=>$products]);
    }

    public function addproduct(Request $request){
        $products = DB::table("products")
            ->insert(
                [
                    'name'=> $request->name,
                    'quantity'=> $request->quantity,
                    'price'=> $request->price,
                ]);
                return redirect('index');
    }

    public function deleteproduct(string $id){
        $products = DB::table("products")
        ->where('id', $id)
        ->delete();
        return redirect('index');

    }
    public function viewproduct(string $id){
        $products = DB:: table("products")
        ->where('id', $id)
        ->get();
        return view('product.view' , ['data'=>$products]);
    }

    public function editproduct(Request $request, string $id){
        $products = DB::table("products")
        ->find($id);
        return view('product.update', ['data'=>$products]);
    }
    public function updateproduct(Request $request, string $id){
        $products = DB::table("products")
        ->where('id' , $id)
        ->update(
            [
                'name'=>$request->name,
                'quantity'=>$request->quantity,
                'price'=>$request->price
            ]);
            return redirect('index');
    }


}
