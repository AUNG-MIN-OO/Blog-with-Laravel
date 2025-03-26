<section class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h5 class="fw-bold">Comments({{$comments->count()}})</h5>
            <div class="card p-2 p-md-4 shadow-sm rounded-1">
                @foreach($comments as $comment)
                    <x-single-comment :lastComment="$loop->last" :comment="$comment"></x-single-comment>
                @endforeach
            </div>
        </div>
    </div>
</section>
