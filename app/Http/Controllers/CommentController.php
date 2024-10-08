<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as ValidatorFacade;
use Illuminate\Support\Facades\URL;

class CommentController extends Controller
{
    public function store(Request $request, $task)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|min:3'
        ]);

        Comment::create(array_merge($validatedData, ['task_id' => $task]));

        return back();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
