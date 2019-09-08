
<div class="container">
<div class="card">
        <div class="col-md-12">
                {!! Form::open(array('url' => route('putAddPost'),'method' => 'PUT')) !!}
                    <div class = "form-group mx-1 mt-1">
                    {{Form::hidden("post_id", " 1")}}
                        {{ Form::textArea("title", null,
                            [
                            "class" => "form-control",
                            "placeholder" => "Text",
                            ])
                        }}
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
