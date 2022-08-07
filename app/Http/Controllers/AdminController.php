<?php

namespace App\Http\Controllers;

use App\Models\Draft;
use App\Models\Portfolio;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

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

    public function register()
    {
        return view("admin/register_student");
    }

    public function storeStudent(Request $request, User $user)
    {
        $admission_year = Carbon::now()->year;
        $admission_month = $request["student"]["month"];
        $admission_term = $request["student"]["term"];

        $user->name = $admission_year . $admission_month  . $admission_term;

        if($admission_term == "E"){
            $user->password = Hash::make($admission_year . $admission_month . "early");
        }else{
            $user->password = Hash::make($admission_year . $admission_month . "late");
        }

        $user->role = 4;
        $user->save();

        return redirect("/portfolio");
    }
}
