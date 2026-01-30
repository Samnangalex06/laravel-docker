<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudienceController extends Controller
{
    //
    public function subscribe(Request $request)
{
    foreach ($request->article_ids as $id) {
        Audience::find($request->audience_id)
            ->update(['article_id' => $id]);
    }

    return response()->json(['message' => 'Subscription completed']);
}


}
