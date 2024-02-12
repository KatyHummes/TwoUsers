<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class buyerController extends Controller
{
    public function index()
    {
        return Inertia::render('Buyer');
    }
}
