<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Cart;
use App\Mail\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::limit(9)->get();
        $category = Category::all();
        return view('allproducts', ['products'=>$products, 'category'=>$category]);
    }

    public function productList(){
        $id = last(request()->segments());
        $category = Category::all();
        $products = DB::table('products')->where('id_subcategory',$id)->paginate(15);
        return view('categoryProducts', ['products'=>$products, 'category'=>$category]);
    }

    public function productPag(){
        $productId = last(request()->segments());
        $category = Category::all();
        $selectedProduct = DB::table('products')->where('id',$productId)->get();
        return view('productPage', ['product'=>$selectedProduct, 'category'=>$category]);
    }

    public function detaliiShop(){
        $category = Category::with(Subcatedory::class);    
        return view('detaliiShop', ['category'=>$category]);
    }

    public function addProductToCart(Request $request, $id){
        // $request->session()->forget("cart");
        // $request->session()->flush();

        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);

        $product = Product::find($id);
        $cart->addItem($id, $product);
        $request->session()->put('cart', $cart);

        return redirect()->back();
        //return redirect()->route('allProducts');
    }

    public function search(Request $request){
        $searchTest = $request->get('searchText');
        $products = Product::where('name','Like',$searchTest."%")->paginate(3);
        return view('allproducts', compact('products'));
    }

    public function showCart(){
        $cart = Session::get('cart');


        if($cart){
            //cart is not empty
            return view('cartproducts',['cartItems'=>$cart]);

        } else {
            echo "cart is empty";
            //cart is empty
            return redirect()->route('allProducts');
        }
    }

    public function deleteItemFromCart(Request $request, $id){
        $cart = $request->session()->get('cart');
        if(array_key_exists($id,$cart->items)){
            unset($cart->items[$id]);
        }

        $prevCart = $request->session()->get('cart');
        $updatedCart = new Cart($prevCart);
        $updatedCart->updatePriceAndQuantity();

        $request->session()->put('cart',$updatedCart);

        return redirect()->route('cartproducts');
    }

    public function increaseSingleProduct(Request $request, $id){
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        $product = Product::find($id);
        $cart->addItem($id,$product);
        $request->session()->put('cart',$cart);
        return redirect()->route("cartproducts");
    }

    public function decreaseSingleProduct(Request $request, $id){
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);

        if($cart->items[$id]['quantity']>1){
            $product = Product::find($id);
            $cart->items[$id]['quantity'] = $cart->items[$id]['quantity']-1;
            $cart->items[$id]['totalSinglePrice'] = $cart->items[$id]['quantity'] * $product['price'];
            $request->session()->put('cart', $cart);
            return redirect()->route("cartproducts");
        }
    }

    public function createOrder(Request $request){

        $cart = Session::get('cart');

        $orderDetails = $request->all();
        $userId = Auth::id();
        $phone = $orderDetails['phone'];
        $email = $orderDetails['email'];
        $address = $orderDetails['address'];
        $businessName = $orderDetails['businessName'];
        $cui = $orderDetails['cui'];
        $message = $orderDetails['message'];
        $fullName = $orderDetails['fullName'];

        $orderDetails = array( 
            "user_id" => $userId,           
            "status"=>"new",
            "phone"=>$phone,
            "email"=>$email,
            "address"=>$address,
            "businessName"=>$businessName,
            "cui"=>$cui,
            "message"=>$message,
            "name"=>$fullName,
            "totalPrice"=>"1000"
        );

        $created_order_details = DB::table("orders")->insert($orderDetails);

        //cart is not empty
        if($cart){
            $date = date('Y-m-d H:i:s');
            $newOrderArray = array("date"=>$date,"price"=>$cart->totalPrice);
            //$created_order = DB::table('orders')->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();

            foreach ($cart->items as $cart_item){

                $item_id = $cart_item['data']['id'];                
                $item_name = $cart_item['data']['product_name'];
                $item_price = $cart_item['data']['incrised_price'];
                $quantity = $cart_item['quantity'];


                $newItemsInCurrentOrder = array(
                    "item_id"=>$item_id,                    
                    "order_id"=>$order_id,
                    "item_name"=>$item_name,
                    "item_price"=>$item_price,
                    "quantity"=>$quantity
                );

                $created_order_items = DB::table("order_items")->insert($newItemsInCurrentOrder);

            }

            //Send email
            Mail::to(request('email'))->send(new Order($cart, $orderDetails));

            //delete cart
            Session::forget('cart');
            Session::flush();
            return redirect()->route('allProducts')->withsuccess("Multumim pentru comanda");

            
        } else {
            return redirect()->route('allProducts');
        }
    }

    public function checkoutProducts(){
        return view('checkoutproducts');
    }

    public function seeAProduct($id){
        $selectedProduct = DB::table('products')->where('id',$id)->first();
        return view('productPage', ['selectedProduct'=>$selectedProduct]);
    }    

}
