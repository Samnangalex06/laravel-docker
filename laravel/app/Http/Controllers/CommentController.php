<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request)
{
    $comment = Comment::create([
        'name' => $request->name,
        'user_id' => $request->user_id,
        'commentable_id' => $request->commentable_id,
        'commentable_type' => $request->commentable_type
    ]);

    return response()->json($comment);
}

}
