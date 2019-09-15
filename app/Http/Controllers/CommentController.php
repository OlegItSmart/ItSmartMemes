<?php

namespace App\Http\Controllers;


use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 
    public function putAddComment(Request $request)
    {
        // dd($request);
        $comment = Comment::create($request->all());
        $comment->save();
    	return Redirect::back();
    }
    
}
