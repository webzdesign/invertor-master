<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 8;
        $page = 1;
        if (isset($request->page) && $request->page != '') {
            $page = $request->page;
        }

        if ($page == 1) {
            $skip = 0;
        } else {
            $skip = ($page - 1) * $perPage;
        }

        $products = Product::with('images');

        $totalProducts = $products->count();

        $products = $products->skip($skip)->take($perPage)->get();

        $totalPages = ceil($totalProducts / $perPage);

        return view('home', compact('products', 'totalProducts', 'totalPages', 'page'));
    }

    public function productDetail($productId)
    {
        $product = Product::with('images')->find(decrypt($productId));
        $othersProducts = Product::with('images')->where('id', '!=', decrypt($productId))->limit(4)->get();

        return view('productDetail', compact('product', 'othersProducts'));
    }

    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);

        $product = Product::with('images')->find(decrypt($request->productId));
        if (!$product) {
            return response()->json(['success' => false, 'cart' => $cart]);
        }
        
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $request->quantity;
        } else {
            $cart[$product->id] = [
                'quantity' => $request->quantity,
                'name' => $product->name,
                'price' => $product->web_sales_price,
                'image' => isset($product->images[0]) ? env('APP_Image_URL').'storage/product-images/'.$product->images[0]->name : '',
                'url' => route('productDetail', encrypt($product->id))
            ];
        }

        session()->put('cart', $cart);
        session()->save();

        $cartCount = count($cart);

        return response()->json(['success' => true, 'cart' => $cart, 'cartCount' => $cartCount]);
    }
}
