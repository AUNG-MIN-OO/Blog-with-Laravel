<x-layout>
    <x-slot name="title">
        My Blogs
    </x-slot>
    @foreach($blogs as $blog)
        <a href="blog/{{$blog->slug}}"> {{$blog->title}} </a>
        <div>
            <a href="category/{{$blog->category->slug}}">{{$blog->category->category_name}}</a>
            <p>Published at => {{$blog->created_at->diffForHumans()}}</p>
            <p>{{$blog->intro}}</p>
            <a href="user/{{$blog->user->username}}">
                <h4>Author - {{$blog->user->name}}</h4>
            </a>
        </div>
    @endforeach
</x-layout>
