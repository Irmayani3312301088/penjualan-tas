<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());

        return back()->with('sukses', 'Terima kasih atas pesan Anda. Kami akan segera menghubungi Anda kembali.');
    }
}
