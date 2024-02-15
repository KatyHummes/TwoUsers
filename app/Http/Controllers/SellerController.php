<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SellerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // dd($user->type);

        if ($user->type == "seller") {
            return Inertia::render('Seller',[
                'user' => $user
            ]);
        }else{
            return redirect('cliente');
        }
    }
}
