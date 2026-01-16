<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show_post_create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store_post(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:200',
            'content' => 'required|min:10',
            'category_id' => 'required|exists:categories,id',
            'cover' => 'image|mimes:png,jpg,svg,gif,jpeg'
        ], [
            'category_id.exists' => "La catégorie n'existe pas !"
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;

        // image
        if($request->hasFile('cover')) {
            $post->cover = $request->file('cover')->store('images/posts');
        }

        $post->save();

        return redirect()->route('post.list');
    }

    public function list_post()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.list', compact('posts'));
    }
}
