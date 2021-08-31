<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function index()
    {

        // Tag::create([
        //     'title' => 'Hello world!'
        // ]);
        $tag = new Tag();
        $tag->title = "Hello world!";
        $tag->save();
        return view('Admin.index');
    }
}
