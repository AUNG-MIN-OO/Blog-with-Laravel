<section class="container text-center" id="blogs">
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">

        <div class="btn-group">
            <button type="button" class="btn btn-outline-dark rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                {{isset($currentCategory) ? $currentCategory->category_name : "Filter by Category"}}
            </button>
            <ul class="dropdown-menu">
                @foreach($categories as $category)
                    <li><a class="dropdown-item" href="/category/{{$category->slug}}">{{$category->category_name}}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-outline-dark rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Filter by Tag
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
        </div>

    </div>
    <form action="" class="my-3" method="get">
        <div class="input-group mb-3">
            <input
                name="search"
                value="{{request('search')}}"
                type="text"
                autocomplete="false"
                class="form-control"
                placeholder="Search Blogs..."
            />
            <button
                class="input-group-text bg-primary text-light"
                id="basic-addon2"
                type="submit"
            >
                Search
            </button>
        </div>
    </form>
    <div class="row">
        @forelse($blogs as $blog)
            <x-blog_card :blog="$blog"></x-blog_card>
        @empty
            <h1 class="text-danger">No Results!</h1>
        @endforelse
    </div>
</section>
