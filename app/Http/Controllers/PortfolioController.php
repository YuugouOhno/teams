<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Portfolio $portfolio)
    {
        $items = $portfolio->get();
        return view('index', compact('items'));
    }
}
