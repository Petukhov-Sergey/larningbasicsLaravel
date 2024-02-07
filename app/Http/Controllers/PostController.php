<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
           'title' => 'string',
           'body' => 'string',
           'image' => 'integer'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

}