<x-layout>

    {{--    hero section  --}}
    <x-hero></x-hero>

    <!-- blogs section -->
    <x-blog_section :blogs="$blogs" :categories="$categories" :currentCategory="$currentCategory??null"/>

    <!-- subscribe new blogs -->
    <x-subscribe></x-subscribe>

</x-layout>


