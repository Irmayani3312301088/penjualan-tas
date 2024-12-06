<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function processPayment(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|regex:/\d{3}[\-]\d{3}[\-]\d{4}/',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'postal_code' => 'required|regex:/\d{5}/',
            'order_date' => 'required|date_format:m/d/Y',
            'email' => 'required|email',
            'expedition' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('payment')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Proses pembayaran
        // Misalnya, simpan data ke database atau kirim ke payment gateway

        // Redirect atau kirim response sukses
        return redirect()->route('confirmation.show')->with('success', 'Payment processed successfully!');
    }
}
