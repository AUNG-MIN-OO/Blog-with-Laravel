<div class="btn-group">
    <button type="button" class="btn btn-outline-dark rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        {{isset($currentCategory) ? $currentCategory->category_name : "Filter by Category"}}
    </button>
    <ul class="dropdown-menu">
        @foreach($categories as $category)
            <li><a class="dropdown-item" href="/?category={{$category->slug}}">{{$category->category_name}}</a></li>
        @endforeach
    </ul>
</div>
