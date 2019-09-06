@extends('layouts.app')

@section('content')

    <div class=" col-sm-8 col-xs-12 p-1 mx-auto">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <div class="d-flex justify-content-around " >
                <h4 class="border-bottom border-gray pb-2 mb-0 text-center" id="titlePosts">{{$title}}</h4>
                <button type="button" class="btn btn-outline-primary" id="buttonAllPosts" style="display: none; " 
                title="Показать все посты">All posts</button>
            </div>
            <!-- <h4 class="border-bottom border-gray pb-2 mb-0 text-center" id="titlePosts">{{$title}}</h4> -->
                @if(isset($data))
                    @foreach($data as $item)
                       @include('post.itemPost')
                    @endforeach
                @endif
        </div>
    </div>
    {{$data->links()}}
    <div class="modal fade" id="div_my_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my_modal_title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id = "img_image_modal" class="img-fluid" src = "" width=100% heith=auto>
                        <p id="text_city_modal" class = "mx-auto"></p>
                        <p id="text_city_modal_avtor" class = "mx-auto"></p>
                    </div>
                </div>
            </div>
            <!-- {{ csrf_field() }} -->
    </div>
@endsection