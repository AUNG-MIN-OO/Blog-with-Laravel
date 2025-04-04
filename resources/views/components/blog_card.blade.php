<div class="col-md-4 mb-4">
    <div class="card">
        <img
            src="/storage/{{$blog->thumbnail}}"
            class="card-img-top"
            alt="..."
        />
        <div class="card-body">
            <h3 class="card-title">{{$blog->title}}</h3>
            <p class="fs-6 text-secondary">
                uploaded by
                <a href="/?user={{$blog->user->username}}" class="text-decoration-none fw-bold text-dark">
                    <span class="fw-bold">{{$blog->user->name}}</span>
                </a>
                <span>{{$blog->created_at->diffForHumans()}}</span>
            </p>
            <div class="tags my-3">
                <a href="/?category={{$blog->category->slug}}">
                    <span class="badge bg-danger">{{$blog->category->category_name}}</span>
                </a>
            </div>
            <p class="card-text">
                {{$blog->intro}}
            </p>
            <a href="blog/{{$blog->slug}}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>

