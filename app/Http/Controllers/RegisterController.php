<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function page() {
        $title = "Daftar";

        return view('authentication.register', compact('title'));
    }
}
