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


//        if($tags_id) {
//            $query->where('tag_id', $tag_id);
//        }

        $tags = $tag->get();
        $items = $portfolio->latest()->paginate(10);
        return view('index', compact('items', 'tags'));
    }

    public function show(Portfolio $portfolio)
    {
        return view('show', compact('portfolio'));
    }

    public function create(Portfolio $portfolio, Tag $tag)
    {
        $tags = $tag->get();
        return view('create', compact('tags'));
    }

    public function store(Portfolio $portfolio, Request $request)
    {
        $tags = $request->input('tags');
        $input = $request->all();
        $portfolio = $portfolio->create($input);

        $portfolio->tags()->attach($tags);
        return redirect('/portfolio/' . $portfolio->id);
    }
}
