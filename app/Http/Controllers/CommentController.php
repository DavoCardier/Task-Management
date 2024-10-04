<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
{

    $comment = Comment::create($request->all());
    
}
public function show($id)
{
    $comment = Comment::findOrFail($id);
    
}
public function update(Request $request, $id)
{
    $comment = Comment::findOrFail($id);
    $comment->update($request->all());
    
}
public function destroy($id)
{
    $comment = Comment::findOrFail($id);
    $comment->delete();
   
}

}
