@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center" style="font-size:30px">
            You are logged as {{Auth::user()->name}}
        </div>
    </div>
</div>
@endsection
