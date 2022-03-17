<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminProductsController extends Controller
{

    //Display all products
    public function index(){
        //$products = Product::all();
        $products = Product::paginate(1);
        return view('admin.displayProducts', ['products'=>$products]);
    }

    //Display edit product form
    public function editProductForm($id){
        $product = Product::find($id);
        return view('admin.editProductForm',['product'=>$product]);
    }

    //Display edit product Image form
    public function editProductImageForm($id){
        $product = Product::find($id);
        return view('admin.editProductImageForm',['product'=>$product]);
    }

    //
    public function updateProductImage(Request $request, $id){

        Validator::make($request->all(),['image'=>'required|image|mimes:jpg,png,jpeg,webp|max:1000'])->validate();

        if($request->hasFile('image')){
            $product = Product::find($id);
            $exists = Storage::disk('local')->exists('public/product_images'.$product->image);

            //Delete old image
            if($exists){
                Storage::delete('public/product_images/'.$product->image);
            }

            //Upload new image
            $ext = $request->file('image')->getClientOriginalExtension();
            $request->image->storeAs('public/product_images',$product->image);

            $arrayToUpdate = array('image'=>$product->image);
            DB::table('products')->where('id',$id)->update($arrayToUpdate);
            return redirect()->route('adminDisplayProducts');

        } else {

            $error = "No image was selected";
            return $error;

        }
    }

    public function updateProduct(Request $request, $id){
        $name = $request->input('name');
        $description = $request->input('description');
        $type = $request->input('type');
        $price = $request->input('price');
        $updateArray = array('name'=>$name,'description'=>$description, 'type'=>$type, 'price'=>$price);

        DB::table('products')->where('id',$id)->update($updateArray);
        return redirect()->route('adminDisplayProducts');
    }

    public function createProductForm(){
        return view('admin.createProductForm');
    }

    //send new product to db
    public function sendCreateProductForm(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        $type = $request->input('type');
        $price = $request->input('price');
        Validator::make($request->all(),['image'=>'required|image|mimes:jpg,png,jpeg,webp|max:1000'])->validate();
        $ext = $request->file('image')->getClientOriginalExtension();
        $stringImageReFormat = str_replace(' ', '',$request->input('name'));
        $imageName = $stringImageReFormat.".".$ext;
        $imageEncoded = File::get($request->image);
        Storage::disk('local')->put('public/product_images/'.$imageName,$imageEncoded);
        $newProductArray = array('name'=>$name,'description'=>$description,'image'=>$imageName, 'type'=>$type, 'price'=>$price);
        $created = DB::table('products')->insert($newProductArray);
        if($created){
            return redirect()->route('adminDisplayProducts');
        } else {
            return "Product was not created";
        }
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $exists = Storage::disk('local')->exists('public/product_images/'.$product->image);

            //Delete old image
            if($exists){
                Storage::delete('public/product_images/'.$product->image);
            }
        Product::destroy($id);
        return redirect()->route('adminDisplayProducts');
    }

    public function adminOrders(){
        //$adminOrders = Order::all();

        $adminOrders = DB::table('orders')
        ->join('orders','orders.order_id','order_items.order_id')
        ->select('orders.*')
        ->get();

        //$order = new Order();    

        return view('admin.adminOrders', compact('adminOrders'));
    }

    public function changeOrderStatus($id){
        $product = Product::find($id);
        $exists = Storage::disk('local')->exists('public/product_images/'.$product->image);

            //Delete old image
            if($exists){
                Storage::delete('public/product_images/'.$product->image);
            }
        Product::destroy($id);
        return redirect()->route('adminDisplayProducts');
    }
}
