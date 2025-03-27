<x-layout>
    <!-- single blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <img
                    src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                    class="card-img-top" alt="..."/>
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
                <a
                    href="#subscribe"
                    type="button"
                    class="btn btn-danger btn-lg px-4 gap-3 rounded-pill"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"></path>
                    </svg>

                    Subscribe Now
                </a>
                <h3 class="my-3">{{$blog->title}}</h3>
                <p class="lh-md">
                    {{$blog->body}}
                </p>
            </div>
        </div>
    </div>

    <x-comment-form :blog="$blog"></x-comment-form>

    <x-comments :comments="$blog->comments()->paginate(3)" :blog="$blog"></x-comments>

    <x-blog_suggestion :randomBlogs="$randomBlogs"/>

</x-layout>
