<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'email',
        'address',
        'total_amount',
        // Tambahkan kolom lainnya sesuai kebutuhan
    ];
}
