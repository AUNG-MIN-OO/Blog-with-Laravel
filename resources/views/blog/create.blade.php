<x-alert></x-alert>
<x-layout>
    <x-slot name="title">Create New Blog | My Blog</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h2 class="text-center mt-3">Create New Blog</h2>
                <div class="card p-4 shadow-sm m-4">
                    <form enctype="multipart/form-data" method="POST" action="/admin/blog/store">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" value="{{old('title')}}">
                            <x-show-error errorName="title"></x-show-error>
                        </div>
                        <div class="mb-3">
                            <label for="intro" class="form-label">Intro</label>
                            <input type="text" class="form-control" id="intro" aria-describedby="introHelp" name="intro" value="{{old('intro')}}">
                            <x-show-error errorName="intro"></x-show-error>
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" aria-describedby="slugHelp" name="slug" value="{{old('slug')}}">
                            <x-show-error errorName="slug"></x-show-error>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Choose Category</label>
                            <select class="form-select" id="category" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id==old('category_id') ? "selected":""}}>{{$category->category_name}}</option>
                                @endforeach
                            </select>
                            <x-show-error errorName="category"></x-show-error>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Blog Body</label>
                            <textarea name="body" id="body" cols="10" rows="3" class="form-control" placeholder="Blog body"></textarea>
                            <x-show-error errorName="body"></x-show-error>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="slug" name="thumbnail" value="{{old('thumbnail')}}">
                            <x-show-error errorName="thumbnail"></x-show-error>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
