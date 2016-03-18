<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $projets = Post::All();
        return view('admin.index')->with(compact('projets'));
    }

    public function projets()
    {
        $projets = Post::All();
        return view('admin.projets')->with(compact('projets'));
    }

    public function articles()
    {
        $articles = Article::All();
        return view('admin.articles')->with(compact('articles'));
    }

    public function users()
    {
        $users = User::All();
        return view('admin.users')->with(compact('users'));
    }
}