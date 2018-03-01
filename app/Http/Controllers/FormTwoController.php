<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Polite;

class FormTwoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'favor' => new Polite,
            //'favor' => ['required', new Polite], // If you want additional rules
        ]);

        dd('Valid!');
    }
}
