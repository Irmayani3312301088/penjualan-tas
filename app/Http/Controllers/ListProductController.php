<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function getData(){
        //logika untuk mendaptakan array data
        $dataProduct = [
            ['id' => 1, 'nama barang' => 'Tas Mini Backpack', 'pcs' => 1, 'harga' => 150000],
            ['id' => 2, 'nama barang' => 'Tas Messenger Bag', 'pcs' => 3, 'harga' => 250000],
            ['id' => 3, 'nama barang' => 'Tote Bag', 'pcs' => 1, 'harga' => 234000],
            ['id' => 4, 'nama barang' => 'Tas Shoulder Bag', 'pcs' => 4, 'harga' => 516000],
            ['id' => 5, 'nama barang' => 'Tas Bucket Bag', 'pcs' => 2, 'harga' => 147000],
        ];

        return $dataProduct;

    }

    public function product(){
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}
