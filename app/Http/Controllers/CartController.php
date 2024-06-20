<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }


    public function showProducts()
    {
        // Asumsikan Anda mendapatkan data produk dari database atau sesi
        $products = [
            ['id' => 1, 'product_name' => 'Sling Bag-Grey', 'photo' => '18.png', 'price' => 1150000],
            ['id' => 2, 'product_name' => 'Sling Bag-Grey', 'photo' => '19.png', 'price' => 1150000],
            ['id' => 3, 'product_name' => 'Tas Ransel', 'photo' => 'p1.png', 'price' => 367000],
            ['id' => 4, 'product_name' => 'Tas Sekolah', 'photo' => 'p2.png', 'price' => 289000],
            // Tambahkan produk lainnya
        ];

        return view('produk', ['products' => $products]);
    }

    public function addToCart($id)
    {
        $cartProduct = Cart::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nama" => $cartProduct->nama,
                "image" => $cartProduct->image,
                "harga" => $cartProduct->harga,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}


