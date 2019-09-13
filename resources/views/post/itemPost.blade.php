
    <div class=" media text-muted pt-3 divPostView" data-post_id="{{$item->id}}" data-name_authtor="{{$item->user->name}}">
        <img class="itemViewImg bd-placeholder-img mr-2 rounded" width="50" height="50" src="{{$item->content}}"
             id="{{$item->content}}" title="{{$item->title}}">
        <p class="media-body pb-4 mb-0 lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark"><a href="{{ route('showPost', $item) }}">{{$item->title}}</a></strong>
            <strong class="d-block text-gray-dark postsAuth" title="Посты добавленные пользователем {{$item->user->name}}" 
                data-name_authtor="{{$item->user->name}}">
                Автор: {{$item->user->name}}
            </strong>
        </p>
        <div class="d-flex justify-content-around">
            <button type="button" class="btn btn-outline-danger butDel" name="{{$item->title}}" 
                title="Удалить {{$item->title}}" data-post_id="{{$item->id}}">del</button>
        </div>
    </div>
