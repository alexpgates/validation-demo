<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormThreeController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'reply' => [
            'required',
            'max:255',
                function($attribute, $value, $fail) {
                    if (strtolower($value) === 'this.') {
                        return $fail($attribute.' is invalid.');
                        //return $fail('Sorry, "'.$value.'" adds no value whatsoever');
                    }
                },
            ],
        ]);

        dd('Valid!');
    }
}
