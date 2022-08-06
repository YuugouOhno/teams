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

    public function show(Portfolio $portfolio)
    {
        return view('show', compact('portfolio'));
    }

    public function create(Portfolio $portfolio)
    {
        return view('create');
    }

    public function store(Portfolio $portfolio)
    {
        $input
        return redirect('/portfolio/' . $portfolio->id);
    }
}
