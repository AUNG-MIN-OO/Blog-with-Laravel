<section class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card p-2 p-md-4 shadow-sm rounded-1">
                @auth
                    <form class="mb-0" action="/blog/{{$blog->slug}}/comments" method="POST">
                        @csrf
                        <div class="mb-3">
                            <textarea name="comment_body" id="" cols="10" rows="3" class="form-control" placeholder="Write a comment ..."></textarea>
                            <x-show-error errorName="comment_body"></x-show-error>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                    </form>
                @endauth
                @guest
                    <p>Please <a href="/login">Log in</a> first to write a comment!</p>
                @endguest
            </div>
        </div>
    </div>
</section>
