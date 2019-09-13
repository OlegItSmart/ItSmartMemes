@extends('layouts.app')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mytitle text-center">Добавить post</div>
                
                {!! Form::open(array('url' => route('putAddPost'),'method' => 'PUT')) !!}
                    <div class = "form-group mx-1 mt-1">
                        {{ Form::text("title", null,
                            [
                            "class" => "form-control",
                            "placeholder" => "Title",
                            ])
                        }}
                    </div>
                    <div class = "form-group mx-1">
                        {{ Form::text("content", null,
                            [
                            "class" => "form-control",
                            "placeholder" => "url",
                            ])
                        }}
                    </div>
                    <div class = "form-group mx-1">
                        {{ Form::textarea("description", null,
                            [
                            "class" => "form-control",
                            "placeholder" => "text",
                            ])
                        }}
                    </div>
                    <div class = "form-group ">
                        {{ Form::hidden("author", Auth::user()->id )}}
                    </div>
                    <div class="d-flex justify-content-end">    
                        <div class = "form-group mr-3">
                            {{ Form::submit("сохранить")}}
                {!! Form::close() !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection