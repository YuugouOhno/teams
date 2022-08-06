<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Portfolio;
use App\Models\Tag;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Carbon\Carbon;
use App\Models\User;


=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 13db57885e7ca2f2e4c7672e185d951baa88eeb0

class PortfolioController extends Controller
{
    public function index(Portfolio $portfolio, Tag $tag, Request $request)
    {
<<<<<<< HEAD
        $items = $portfolio->get();
        return view('index', compact('items'));
=======
        $query = Portfolio::with('tag')->latest();
        $tag_id = $request->tags;


//        if($tags_id) {
//            $query->where('tag_id', $tag_id);
//        }

        $tags = $tag->get();
        $items = $portfolio->latest()->paginate(10);
        return view('index', compact('items', 'tags'));
>>>>>>> 13db57885e7ca2f2e4c7672e185d951baa88eeb0
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

    public function store(Portfolio $portfolio)
    {
<<<<<<< HEAD
=======
        $tags = $request->input('tags');
        $input = $request->all();
        $portfolio = $portfolio->create($input);

        $portfolio->tags()->attach($tags);
>>>>>>> 13db57885e7ca2f2e4c7672e185d951baa88eeb0
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
