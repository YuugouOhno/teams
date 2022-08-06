<?php

namespace App\Http\Controllers;

use App\Models\Draft;
use App\Models\Portfolio;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Draft $draft)
    {
        $drafts = $draft->get();
        return view('admin/index', compact('drafts'));
    }
    
    public function create(Draft $draft, Tag $tag)
    {
        $tags = $tag->get();
        return view('admin/create', compact('draft', 'tags'));
    }
    
    public function store(Portfolio $portfolio, Draft $draft, Request $request)
    {
        $tags = $request->input('tags');
        $input = $request->all();
        $portfolio = $portfolio->create($input);
        $portfolio->tags()->attach($tags);
        
        $draft->find($input['draft'])->delete();
        return redirect('/portfolio/' . $portfolio->id);
    }
    
    public function store_tag(Tag $tag, Request $request)
    {
        $input = $request->all();
        $tag = $tag->create($input);
        return redirect('/admin/');
    }
}
