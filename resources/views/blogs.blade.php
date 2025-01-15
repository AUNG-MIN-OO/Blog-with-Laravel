<x-layout>
    <x-slot name="title">
        My Blogs
    </x-slot>
    @foreach($blogs as $blog)
        <a href="blog/<?= $blog->id ?>"> {{$blog->title}} </a>
        <div>
            <p>Published at => {{$blog->created_at->diffForHumans()}}</p>
            <p>{{$blog->intro}}</p>
        </div>
    @endforeach
</x-layout>
