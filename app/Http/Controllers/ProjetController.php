<?php

namespace App\Http\Controllers;



use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',
            ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('projets.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->lists('name', 'id');
        return view('projets.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ValidateProfilRequest $request)
    {

        $post = new Post;

        $post->title    = $request->title;
        $post->user_id  = $request->user_id;
        $post->commanditaire  = $request->commanditaire;
        $post->command_metier  = $request->command_metier;
        $post->command_tel  = $request->command_tel;
        $post->command_mail  = $request->command_mail;
        $post->command_ville  = $request->command_ville;
        $post->decisionnaire  = $request->decisionnaire;
        $post->decid_metier  = $request->decid_metier;
        $post->decid_tel  = $request->decid_tel;
        $post->decid_mail  = $request->decid_mail;
        $post->decid_ville  = $request->decid_ville;
        $post->type_projet  = $request->type_projet;
        $post->contexte  = $request->contexte;
        $post->textprojet  = $request->textprojet;
        $post->objectifs  = $request->objectifs;
        $post->contraintes  = $request->contraintes;
        $post->save();

        return redirect()
            ->route('projets.show', $post->id)
            ->with(compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        //dd($post);

        if (!$post){
            return redirect()->to('/projets');
        }

        return view('projets.show')->with(compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $users = User::all()->lists('name', 'id');

        if (!$post){
            return redirect()->to('/projets');
        }

        return view('projets.edit')->with(compact('post', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ValidatePasswordRequest $request, $id)
    {

        $post = Post::find($id);



        $post->title    = $request->title;
        $post->user_id  = $request->user_id;
        $post->commanditaire  = $request->commanditaire;
        $post->command_metier  = $request->command_metier;
        $post->command_tel  = $request->command_tel;
        $post->command_mail  = $request->command_mail;
        $post->command_ville  = $request->command_ville;
        $post->decisionnaire  = $request->commanditaire;
        $post->decid_metier  = $request->decid_metier;
        $post->decid_tel  = $request->decid_tel;
        $post->decid_email  = $request->decid_email;
        $post->decid_ville  = $request->decid_adresse;
        $post->type_projet  = $request->type_projet;
        $post->contexte  = $request->contexte;
        $post->textprojet  = $request->textprojet;
        $post->objectifs  = $request->objectifs;
        $post->contraintes  = $request->contraintes;
        $post->save();

        return redirect()->route('projets.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('projets.index');

    }

}
