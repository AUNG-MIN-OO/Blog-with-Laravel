<div class="col-md-4 mb-4">
    <div class="card">
        <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
        />
        <div class="card-body">
            <h3 class="card-title">{{$blog->title}}</h3>
            <p class="fs-6 text-secondary">
                {{$blog->username}}
                <span>{{$blog->created_at->diffForHumans()}}</span>
            </p>
            <div class="tags my-3">
                <span class="badge bg-primary">{{$blog->category->category_name}}</span>
            </div>
            <p class="card-text">
                {{$blog->intro}}
            </p>
            <a href="blog/{{$blog->slug}}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>

