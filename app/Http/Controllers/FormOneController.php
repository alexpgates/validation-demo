<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormOneController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|unique:users',
                'url'   => 'active_url',
                'count'   => 'integer',
                'part_two'   => 'required_with:part_one',
                'future' => 'date|after:tomorrow',
                'future_or_equal' => 'date|after:today',
                'agree' => 'accepted',
                'big_photo' => 'dimensions:min_width=1000,min_height=1000',
                'jpeg_photo' => 'mimes:jpeg',
            ]
            // Customizing the error messages
            // ,[
            //     'email.email' => 'We need your email address!',
            //     'url.active_url' => 'Check the intertubes on that one, dude.'
            // ]
        );

        dd('Valid!');
    }
}
