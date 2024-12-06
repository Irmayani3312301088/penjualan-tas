<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Pastikan untuk mengimpor model Product

class HomeController extends Controller
{
    public function index()
    {
        $products = Produk::all(); // Mengambil semua produk dari database
        return view('home', compact('products'));
    }
    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $product = Produk::findOrFail($id);

        if ($product->stock < 1) {
            return redirect()->back()->with('error', 'Product is out of stock!');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        $product->stock--;
        $product->save();

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                $product = Produk::findOrFail($request->id);
                $product->stock += $cart[$request->id]['quantity'];
                $product->save();

                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
     // Tambahkan metode ini
     public function produk()
     {
         $products = Produk::all();
         return view('produk', compact('products'));
     }

    public function contact()
    {
        return view('contact');
    }
}
