<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
   // use AuthorizesRequests;

    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit(Post $post)
    {

        //Gate::authorize('edit-post', $post);
        //auth()->user()->can('edit-post', $post);
        //$this->authorize('edit', $post);

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
 
        $data = request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create([
            ...$data,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('posts.index');
    }

    public function update(Post $post)
    {
    
        $data = request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($data);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
 
        $post->delete();

        return redirect()->route('posts.index');
    }
}
