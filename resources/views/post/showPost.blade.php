@extends('layouts.app')

@section('content')
<div class="container">
<div class="card m-auto">
  <img src="{{$item->content}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title text-center ">{{$item->title}}</h5>
    <p class="card-text">{{$item->description}}</p>
    <div class="d-flex justify-content-end">
        <a href="{{route('getUserPosts', $item->user) }}">Автор: {{$item->user->name}}</a>
    </div>
  </div>
<div class="card-footer bg-white">
@foreach($item->comments as $comment)
<p class="">
  {{$comment->body}}
</p>
<p class="text-right">
  {{$comment->user->name}}  
</p>
<hr>
@endforeach
</div>
@include('Comments.partComments')
</div>
</div>
@endsection
