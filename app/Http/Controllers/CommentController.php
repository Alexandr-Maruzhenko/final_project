<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $request->validate([
            'mark' => 'required|min:1|max:10|integer',
            'text' => 'required',
        ]);

        $commentInfo = $request->all();

        $commentInfo['user_id'] = Auth::id();

        ReviewModel::create($commentInfo);

        echo json_encode($commentInfo);


    }
}
