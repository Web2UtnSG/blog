<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::with('user')->get())->additional(['info' => [
            'currentUser' => auth()->user(),
        ]]);
    }

    public function show(Post $post)
    {
        return PostResource::make($post->load('user'));
    }
}
