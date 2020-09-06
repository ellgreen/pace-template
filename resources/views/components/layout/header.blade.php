<header class="mb-6 bg-gradient-to-r from-purple-700 to-pink-700 text-white">
    <div class="container mx-auto flex justify-between items-center h-16">
        <h1 class="text-2xl font-semibold tracking-wide">
            Pace
        </h1>

        <nav class="flex space-x-4">
            @foreach(['Home' => '/', 'About' => '/about', 'Posts' => '/posts'] as $title => $href)
                <a class="py-1 px-4 rounded hover:bg-pink-600 transition-colors duration-100" href="{{ $href }}">
                    {{ $title }}
                </a>
            @endforeach
        </nav>
    </div>
</header>
