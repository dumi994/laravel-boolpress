<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index()
    {

        $posts = Post::with(['category', 'tags'])->paginate();
        return $posts;
    }
}
