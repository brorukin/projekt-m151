<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function showProducts()
    {
        $products = Product::get();
        return view('products', [
            'products' => $products
        ]);
    }

    public function showProductDetails($id)
    {
        $product = Product::find($id);
        return view('details', [
            'product' => $product
        ]);
    }

    public function showCart()
    {
        $products = Product::get();
        $amount = [];
        foreach ($products as $product) {
            array_push($amount, session()->get('product' . $product['id']));
        }
        return view('cart', [
            'amount' => $amount,
            'products' => $products
        ]);
    }

    public function addProductToCart($id, Request $request)
    {
        $increment = 1;
        if ($request->isMethod('POST')) {
            $increment = $request->all()['amount'];
            //$increment = $data['amount'];
        }
        $product = Product::find($id);
        session()->increment('product' . $id, $increment);
        return redirect('/');
    }

    public function showOrderPage()
    {
        $allproducts = [];
        array_push($allproducts, 0);
        foreach (Product::get() as $item) {
            if (session()->exists('product' . $item['id'])) {
                array_push($allproducts, session()->get('product' . $item['id']));
            } else {
                array_push($allproducts, 0);
            }
        }
        return view('order', [
            'products' => Product::get(),
            'amount' => $allproducts
        ]);
    }

    public function orderProduct()
    {
        
    }
}
