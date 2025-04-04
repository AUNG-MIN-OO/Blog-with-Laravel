<x-layout>
    <!-- single blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <img
                    src='{{asset("/storage/$blog->thumbnail")}}'
                    class="card-img-top my-3" alt="..."/>
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
                <form action="/blogs/{{$blog->slug}}/subscription" method="POST">
                    @csrf
                    @if(auth()->user()->isSubscribedBlog($blog))
                        <button
                            type="submit"
                            class="btn btn-warning btn-sm px-3 rounded-pill"
                        >
                            <i class="bi bi-bell-slash-fill"></i>
                            Unsubscribe
                        </button>
                    @else
                        <button
                            type="submit"
                            class="btn btn-primary btn-sm px-3 rounded-pill"
                        >
                            <i class="bi bi-bell-fill"></i>
                            Subscribe Now
                        </button>
                    @endif
                </form>
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
