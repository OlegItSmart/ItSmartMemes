<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Post;
use App\User;
use Transliterate;
use Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
  use DispatchesJobs, ValidatesRequests;

  /**
   * {@inheritdoc}
   */
  protected function formatValidationErrors(Validator $validator)
  {
    return $validator->errors()->all();
  }
}


class PostController extends Controller
{
    public function putAddPost(Request $request)
    {
        $messages = [
            'title.required' => 'Необходимо указать title',
            'title.unique' => 'Название уже занято.',
            'content.url' => 'Поле <url> должно быть корректным URL',
          ];   
        $this->validate($request, [
            'title' => 'required|unique:posts|max:255',
            'content'=> 'url',
            ],
            $messages);
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

    public function showPost(Post $postItem){
        $item = Post::find($postItem->id);
        return view('post.showPost',compact('item'));
    }
    public function getUserPosts(User $user){
        $data = $user->posts()->paginate(20);
        //$data = Post::where("author",$user->id)->paginate(20);
        $title = 'Посты добавленные пользователем: '.$user->name;
        return view('post.allPosts',compact('data','title'));
    }

}
