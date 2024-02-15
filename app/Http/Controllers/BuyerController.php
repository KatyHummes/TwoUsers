<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class buyerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        if ($user->type == "buyer") {
            return Inertia::render('Buyer');
        }else{
            return redirect('vendedor');
        }
    }
}
