<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactPost;

class FormFourController extends Controller
{
    public function store(ContactPost $request)
    {
        dd('Valid!');
    }
}
