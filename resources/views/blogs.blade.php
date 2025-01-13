<x-layout>
    <x-slot name="title">
        My Blogs
    </x-slot>
    @foreach($blogs as $blog)
        <a href="blog/<?= $blog->slug ?>"> {{$blog->slug}} </a>
        <div>
            <p>{{$blog->date}}</p>
            <p>{{$blog->intro}}</p>
        </div>
    @endforeach
</x-layout>
