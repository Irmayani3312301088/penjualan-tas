@extends('layout.layout')

@section('title', 'Aplikasi Web Penjualan Tas')

@section('content')
<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
  <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
    <div class="mx-auto max-w-5xl">
      <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Payment</h2>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif

      <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
        <form action="{{ route('payment.process') }}" method="POST" class="w-full rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 lg:max-w-xl lg:p-8">
          @csrf
          <div class="mb-6 grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1">
              <label for="full_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Full name </label>
              <input type="text" name="full_name" id="full_name" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="Bonnie Green" value="{{ old('full_name') }}" required />
            </div>

            <div class="col-span-2 sm:col-span-1">
              <label for="phone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Phone </label>
              <input type="text" name="phone" id="phone" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="123-456-7890" pattern="\d{3}[\-]\d{3}[\-]\d{4}" value="{{ old('phone') }}" required />
            </div>

            <div class="col-span-2">
              <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Address </label>
              <textarea name="address" id="address" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="1234 Main St" required>{{ old('address') }}</textarea>
            </div>

            <div class="col-span-2 sm:col-span-1">
              <label for="city" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> City </label>
              <input type="text" name="city" id="city" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="Anytown" value="{{ old('city') }}" required />
            </div>

            <div class="col-span-2 sm:col-span-1">
              <label for="province" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Province </label>
              <input type="text" name="province" id="province" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="Province" value="{{ old('province') }}" required />
            </div>

            <div class="col-span-2 sm:col-span-1">
              <label for="postal_code" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Postal Code </label>
              <input type="text" name="postal_code" id="postal_code" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="12345" pattern="\d{5}" value="{{ old('postal_code') }}" required />
            </div>

            <div class="col-span-2 sm:col-span-1">
              <label for="order-date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Order Date </label>
              <div class="relative">
                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
                  <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <input datepicker datepicker-format="mm/dd/yyyy" name="order_date" id="order-date" type="text" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-9 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="12/23/2023" value="{{ old('order_date') }}" required />
              </div>
            </div>

            <div class="col-span-2 sm:col-span-1">
              <label for="email-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Email </label>
              <input type="email" name="email" id="email-input" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="example@example.com" value="{{ old('email') }}" required />
            </div>

            <div class="col-span-2">
              <label for="expedition" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Expedition </label>
              <select name="expedition" id="expedition" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-primary-500 dark:focus:ring-primary-500" required>
                <option value="J&T Express" {{ old('expedition') == 'J&T Express' ? 'selected' : '' }}>J&T Express</option>
                <option value="Shopee Express" {{ old('expedition') == 'Shopee Express' ? 'selected' : '' }}>Shopee Express</option>
                <option value="JNT" {{ old('expedition') == 'JNT' ? 'selected' : '' }}>JNT</option>
                <option value="Si Cepat Express" {{ old('expedition') == 'Si Cepat Express' ? 'selected' : '' }}>Si Cepat Express</option>
              </select>
            </div>

            <div class="col-span-2">
              <label for="payment-method" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Payment Method </label>
              <select name="payment_method" id="payment-method" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-primary-500 dark:focus:ring-primary-500" required>
                <option value="Cash On Delivery" {{ old('payment_method') == 'Cash On Delivery' ? 'selected' : '' }}>Cash On Delivery</option>
                <option value="Paypal" {{ old('payment_method') == 'Paypal' ? 'selected' : '' }}>Paypal</option>
                <option value="Ovo" {{ old('payment_method') == 'Ovo' ? 'selected' : '' }}>Ovo</option>
                <option value="Credit Card" {{ old('payment_method') == 'Credit Card' ? 'selected' : '' }}>Credit Card</option>
              </select>
            </div>
          </div>

          <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-gray-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Pay now</button>
        </form>

        <div class="mt-6 grow sm:mt-8 lg:mt-0">
          <div class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
            <div class="space-y-2">
              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Original price</dt>
                <dd class="text-base font-medium text-gray-900 dark:text-white">6,592.00</dd>
              </dl>

              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Amount</dt>
                <dd class="text-base font-medium text-green-500">2</dd>
              </dl>
            </div>

            <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
              <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
              <dd class="text-base font-bold text-gray-900 dark:text-white">6,592.00</dd>
            </dl>
          </div>

          <div class="mt-6 flex items-center justify-center gap-8">
            <img class="h-8 w-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal.svg" alt="" />
            <img class="hidden h-8 w-auto dark:flex" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal-dark.svg" alt="" />
            <img class="h-8 w-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa.svg" alt="" />
            <img class="hidden h-8 w-auto dark:flex" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa-dark.svg" alt="" />
            <img class="h-8 w-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard.svg" alt="" />
            <img class="hidden h-8 w-auto dark:flex" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard-dark.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

@endsection
