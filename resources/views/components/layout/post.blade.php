<x-layout.app>
    <div class="mt-6 text-gray-600 font-semibold text-sm">
        {{ \Carbon\Carbon::parse($page->date)->toDayDateTimeString() }}
        -
        {{ $page->author }}
    </div>
    <h2 class="mt-2 font-semibold text-4xl">{{ $page->title }}</h2>


    <x-markdown :markdown="$markdown" class="mt-6" />
</x-layout.app>
