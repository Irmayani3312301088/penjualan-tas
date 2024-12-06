<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Produk::all();
        return view('produk', compact('products'));
    }

    public function cart()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $price = (int)str_replace('.', '', $item['price']);
            $total += $price * $item['quantity'];
        }

        return view('cart', compact('cart', 'total'));
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

    public function produk()
    {
        $products = Produk::all();
        return view('produk', compact('products'));
    }
}
