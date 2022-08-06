<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Draft;
use App\Models\Portfolio;
use App\Models\Tag;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function index(Portfolio $portfolio, Tag $tag, Request $request)
    {
        $tags = $tag->get();
        $items = $portfolio->latest()->paginate(10);
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

    public function store(Draft $draft, Request $request)
    {
        $input = $request->all();
        if (preg_match('/v=(.+)/', $input['movie_url'], $movie_id)) {
            $input['movie_url'] = $movie_id[1];
        }
        $draft = $draft->create($input);

        return redirect('/');
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
