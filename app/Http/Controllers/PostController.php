<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $post = Post::create ([
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel
        ]);

        $validated = $request->validate([
            'name' => 'required|max:20',
            'address' => 'required|max:100',
            'tel' => 'required|max:20'
        ]);

        $post = Post::create($validated);

        return back()->with('message','保存しました');
    }
}
