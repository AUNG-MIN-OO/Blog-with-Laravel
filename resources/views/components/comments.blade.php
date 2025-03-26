<section class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h5 class="fw-bold">Comments(3)</h5>
            <div class="card p-2 p-md-4 shadow-sm rounded-1">
                @foreach(range(1,3) as $item)
                    <x-single-comment :lastComment="$loop->last"></x-single-comment>
                @endforeach
            </div>
        </div>
    </div>
</section>
