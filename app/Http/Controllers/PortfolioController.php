<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Tag;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Portfolio $portfolio, Tag $tag, Request $request)
    {
        $query = Portfolio::with('tag')->latest();
        $tag_id = $request->tags;
        
        if($tag_id) {
            $query->where('tag_id', $tag_id);
            dd($request->tags);
        }

        $tags = $tag->get();
<<<<<<< HEAD
        $items = $portfolio->latest()->paginate(10);
=======
        $items = $portfolio->get();
>>>>>>> 359f0e1dbbd380e571f5d06f337a75eb02540ca1
        return view('index', compact('items', 'tags'));
    }

    public function show(Portfolio $portfolio)
    {
        return view('show', compact('portfolio'));
    }

    public function create(Portfolio $portfolio)
    {
        return view('create');
    }

    public function store(Portfolio $portfolio, Request $request)
    {
        $input = $request->all();
        $portfolio = $portfolio->create($input);
        return redirect('/portfolio/' . $portfolio->id);
    }
}
