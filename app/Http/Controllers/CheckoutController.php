<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class CheckoutController extends Controller
{
    public function showCheckoutForm()
    {
        return view('checkout');
    }

    public function processCheckout(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        try {
            $charge = Charge::create([
                'amount' => 1000, // Amount in cents, adjust as necessary
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Order description',
            ]);

            return redirect()->route('checkout.success');
        } catch (\Exception $ex) {
            return redirect()->route('checkout.failure')->withErrors(['error' => $ex->getMessage()]);
        }
    }

    public function checkoutSuccess()
    {
        return view('checkout_success');
    }

    public function checkoutFailure()
    {
        return view('checkout_failure');
    }
}
