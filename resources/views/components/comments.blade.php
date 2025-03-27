<section class="container mt-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h5 class="fw-bold mb-3">
                Comments
                <span class="rounded-pill bg-primary px-3 text-white ms-3">
                    {{$blog->comments->count()}}
                </span>
            </h5>
            <div class="card p-2 p-md-4 shadow-sm rounded-1">
                @foreach($comments as $comment)
                    <x-single-comment :lastComment="$loop->last" :comment="$comment"></x-single-comment>
                @endforeach
                {{$comments->links()}}
            </div>

        </div>
    </div>
</section>
