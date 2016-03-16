<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentsController extends Controller
{




    public function store(Request $request)
    {





        $comment = new Comment();
        $comment->user_id      = $request->user()->id;
        $comment->article_id        = $request->article_id;
        $comment->com  = $request->com;

        $comment->save();
        return redirect()->route('articles.show', $comment->article_id);

    }
    public function destroy($id)
    {
        $comment= Comment::find($id);
        if(!$comment){
            return redirect()->to('/articles');
        }
        $comment->delete();

        return redirect()->route('articles.index');
    }

}
