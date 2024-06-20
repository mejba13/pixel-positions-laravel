@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo/>
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-lg mt-3 group-hover:text-blue-800 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }} </p>
    </div>
    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag >Backend</x-tag>
        @endforeach
    </div>
</x-panel>
