<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function example()
    {
        $examples = Example::all();
        return view('example', ['examples' => $examples]);
    }
}
