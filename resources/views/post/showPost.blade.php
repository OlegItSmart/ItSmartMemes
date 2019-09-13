@extends('layouts.app')

@section('content')
<div class="card m-auto" style="width: 90%;">
  <img src="{{$item->content}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title text-center ">{{$item->title}}</h5>
    <p class="card-text">{{$item->description}}</p>
    <div class="d-flex justify-content-end">
        <a href="{{route('getUserPosts', $item->user) }}">Автор: {{$item->user->name}}</a>
    </div>
  </div>
</div>

@endsection