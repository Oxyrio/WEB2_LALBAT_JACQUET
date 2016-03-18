<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $articles= Article::all();
        return view('articles.index')->with(compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= User::all()->lists('name', 'id');
        return view('articles.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required|min:10',
            'description' => 'required|min:10'
        ],[
            'title.required' => 'titre obligatoire',
            'title.min' => 'titre supérieur à 10 caractères'
        ]);

        $article = new Article();
        $article->user_id      = $request->user()->id;
        $article->title        = $request->title;
        $article->description  = $request->description;

        $article->save();
        return redirect()->route('articles.show', $article->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article= Article::where('id', $id)->first();

        $comments = $article->comments;

        $users= User::all()->lists('name','id');
        if(!$article){
            return redirect()->to('/articles');
        }
        return view('articles.show')->with(compact('article','comments', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users= User::all()->lists('name','id');
        $article = Article::find($id);
        if(!$article){
            return redirect()->to('/articles');
        }
        return view('articles.edit')->with(compact('article', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $article= Article::find($id);

        if(!$article){
            return redirect()->to('/articles');
        }
        $article->user_id= $request->user_id;
        $article->title= $request->title;
        $article->description= $request->description;

        $article->save();

        return redirect()->route('articles.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article= Article::find($id);
        if(!$article){
            return redirect()->to('/articles');
        }
        $article->delete();

        return redirect()->route('articles.index');
    }
}
