<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FirstController extends Controller
{
    public function __invoke(Request $request)
    {
        return Inertia::render('first', ['message' => 'First Component']);
    }
}
