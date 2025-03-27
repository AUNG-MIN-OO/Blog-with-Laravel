<div class="row mb-2">
    <div class="col-2 col-md-3 text-center">
        <img class="rounded-circle border-0" src="{{ $comment->user->avatar }}" alt="" style="width: 50px;height: 50px"/>
    </div>
    <div class="col-10 col-md-9">
        <div class="d-flex">
            <h6>{{$comment->user->name}}</h6>
            <h6 class="text-muted mx-4">{{$comment->created_at->diffForHumans()}}</h6>
        </div>
        <p class="mb-0">{{$comment->body}}</p>
    </div>
</div>
{{--add hr only between two comments--}}
@if(!$lastComment)
    <hr>
@endif
