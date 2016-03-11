<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        return view('articles.index')->with(compact('posts'));
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

    public function edit($id)
    {
        $users= User::all()->lists('name','id');
        $post= Post::find($id);
        if(!$post){
            return redirect()->to('/articles');
        }
        return view('articles.edit')->with(compact('post', 'users'));
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
            'user_id' => 'required',
            'title' => 'required|min:10',
            'description' => 'required|min:10'
        ],[
            'user_id,required' => 'user_id manquant',
            'title.required' => 'titre obligatoire',
            'title.min' => 'titre supérieur à 10 charachtère'
        ]);


        $post = new Post;
        $post->user_id      = $request->user_id;
        $post->title        = $request->title;
        $post->description  = $request->description;

        $post->save();
        return redirect()->route('articles.show', $post->id);
        //méthode 2
        /*$post= Post::create($request->except('_token'));
        dd($post);

        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::where('id', $id)->first();
        if(!$post){
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post= Post::find($id);

        if(!$post){
            return redirect()->to('/articles');
        }
        $post->user_id= $request->user_id;
        $post->title= $request->title;
        $post->description= $request->description;

        $post->save();

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
        $post= Post::find($id);
        if(!$post){
            return redirect()->to('/articles');
        }
        $post->delete();

        return redirect()->route('articles.index');
    }
}
