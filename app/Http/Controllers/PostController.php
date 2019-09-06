<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Post;
use App\User;
use Transliterate;
use Response;

class PostController extends Controller
{
    public function putAddPost(Request $request)
    {
        $post = Post::create($request->all());
        $post->save();
    	return Redirect::route('getAllPosts');
    }

    public function getAddPost()
    {
        return view('post.addPost');
    }

    public function getAllPosts(Request $request){
        if($request['post_id']){ 
                $post_cur =  Post::find($request['post_id']);  
                $post_cur->delete();        
                $response['title'] = 'post '.$post_cur->title.' deleted';
                return Response::json($response);
            }
        else{
            $data = Post::paginate(20);
            $title = 'All posts';
            return view('post.allPosts',compact('data','title'));
        }
    }
}
