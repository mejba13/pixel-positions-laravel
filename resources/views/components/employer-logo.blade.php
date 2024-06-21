@props(['employer','width'=> 90])

{{-- <img src="{{ Vite::asset('resources/images/laravel-logo.png') }}" class="rounded-full w-32 h-32" alt="Laravel logo">--}}
{{--<img src="http://picsum.photos/seed/{{ rand(0,100000) }}/{{ $width }}" class="rounded-xl" alt="Laravel logo">--}}

<img src="  {{ asset($employer->logo) }}" class="rounded-xl" alt="Laravel logo" width="{{ $width }}">
