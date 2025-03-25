<x-layout>
    <x-alert></x-alert>

    {{--    hero section  --}}
    <x-hero></x-hero>

    <!-- blogs section -->
    <x-blog_section :blogs="$blogs"/>

    <!-- subscribe new blogs -->
    <x-subscribe></x-subscribe>

</x-layout>


