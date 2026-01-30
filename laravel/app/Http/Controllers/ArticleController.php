<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function store(Request $request){
        $article = Article::create ([
            'title' => $request->title,
            'author_id' => $request->author_id
        ]);
    }
    public function subscribe(Request $request)
    {
        foreach ($request->article_ids as $id) {
            Audience::find($request->audience_id)
                ->update(['article_id' => $id]);
        }

        return response()->json(['message' => 'Subscription completed']);
    }

}
