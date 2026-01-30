<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function store(Request $request){
        $user = User::create([
            'name' => $request-> username
        ]);

        $author = Author:: create ([
            'name' => $request->name,
            'user_id' => $user->id
        ]);

        return response()->json($author);

    }
    
}
