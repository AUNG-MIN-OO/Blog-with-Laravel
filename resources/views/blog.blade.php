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
                <div class="badge bg-danger mb-3">
                    {{$blog->category->category_name}}
                </div>
                <h3 class="my-3">{{$blog->title}}</h3>
                <p class="lh-md">
                    {{$blog->body}}
                </p>
                <div class="mb-4">
                    <p class="text-muted small">
                        <strong>Written by:</strong> {{$blog->user->name}}
                        <span class="mx-2">|</span>
                        <strong>Uploaded:</strong> {{$blog->created_at->diffForHumans()}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <x-subscribe/>

    <x-blog_suggestion :randomBlogs="$randomBlogs"/>

</x-layout>
