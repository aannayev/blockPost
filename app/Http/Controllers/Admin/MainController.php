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
        return view('admin.index');
    }
}


