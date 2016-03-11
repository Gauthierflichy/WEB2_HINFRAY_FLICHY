<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('articles.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->lists('name', 'id');
        return view('articles.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidatePostRequest $request)
    {

        $post = new Post;

        $post->user_id  = $request->user_id;
        $post->title    = $request->title;
        $post->description  = $request->description;

        $post->save();

        return redirect()
            ->route('articles.show', $post->id)
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
            return redirect()->to('/articles');
        }

        return view('articles.show')->with(compact('post'));
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
            return redirect()->to('/articles');
        }

        return view('articles.edit')->with(compact('post', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidatePostRequest $request, $id)
    {

        $post = Post::find($id);

        $post->title   = $request->title;
        $post->description = $request->description;
        $post->user_id = $request->user_id;

        $post->save();

        return redirect()->route('articles.show', $post->id);
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

        return redirect()->route('articles.index');

    }

}
