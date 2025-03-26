<x-layout>
    <!-- singloe blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img
                    src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="d-flex justify-content-between mb-3">
                    <div class="badge bg-danger">
                        <a href="?category={{$blog->category->slug}}" class="text-decoration-none text-white">{{$blog->category->category_name}}</a>
                    </div>
                    <div class="text-muted small">
                        <strong>Written by:</strong>
                        <a href="/?user={{$blog->user->username}}" class="text-decoration-none fw-bold text-dark">{{$blog->user->name}}</a>
                        <span class="mx-2">|</span>
                        <strong>Uploaded:</strong> {{$blog->created_at->diffForHumans()}}
                    </div>
                </div>
                <h3 class="my-3">{{$blog->title}}</h3>
                <p class="lh-md">
                    {{$blog->body}}
                </p>
            </div>
        </div>
    </div>

    <x-comments :comments="$blog->comments"></x-comments>

    <x-subscribe/>

    <x-blog_suggestion :randomBlogs="$randomBlogs"/>

</x-layout>
