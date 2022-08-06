<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Portfolio;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function index(Portfolio $portfolio, Tag $tag, Request $request)
    {
        $query = Portfolio::with('tag')->latest();
        dd($request->tags);
        $tag_id = $request->tags;

        if($tags_id) {
            $query->where('tag_id', $tag_id);
        }

        $tags = $tag->get();
        $items = $portfolio->get();
        return view('index', compact('items', 'tags'));
    }

    public function show(Portfolio $portfolio)
    {
        return view('show', compact('portfolio'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Portfolio $portfolio, Request $request)
    {
        $input = $request->all();
        $portfolio = $portfolio->create($input);
        return redirect('/portfolio/' . $portfolio->id);
    }
    
    public function create_comment($portfolio)
    {
        return view('create_comment', compact('portfolio'));
    }
    
    public function store_comment(Comment $comment, Request $request)
    {
        $input = $request->all();
        $input['role'] = Auth::user()->role;
        $comment = $comment->create($input);
        return redirect('/portfolio/' . $comment->portfolio_id);
    }
}
