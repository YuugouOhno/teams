<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Tag;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Portfolio $portfolio, Tag $tag, Request $request)
    {
<<<<<<< HEAD
        $query = Portfolio::with('tag')->latest();
        dd($request->tags);
        $tag_id = $request->tags;

        if($tags_id) {
            $query->where('tag_id', $tag_id);
        }

        $tags = $tag->get();
        $items = $portfolio->get();
        return view('index', compact('items', 'tags'));
=======
        $items = $portfolio->latest()->paginate(10);
        return view('index', compact('items'));
>>>>>>> 33fb7a915fe05770980f25ceafb6d78e99e6d2d1
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
<<<<<<< HEAD

=======
        $input = $request->all();
        $portfolio = $portfolio->create($input);
>>>>>>> 33fb7a915fe05770980f25ceafb6d78e99e6d2d1
        return redirect('/portfolio/' . $portfolio->id);
    }
}
