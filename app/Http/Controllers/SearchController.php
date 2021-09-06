<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function JmesPath\search;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            's' => 'required',
        ]);
        $s = $request->s;
        // $posts = Post::where('title', 'LIKE', "%{$s}%")->with('category')->paginate(2);
        $posts = Post::like($s)->with('category')->paginate(2);
        return view('posts.search', compact('posts', 's'));
    }
}
