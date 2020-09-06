<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pace</title>

    <link rel="stylesheet" href="{{ $mix('/app.css') }}">
    <script src="{{ $mix('/app.js') }}" defer></script>
</head>
<body>
    <x-layout.header />

    <main class="flex flex-col items-center">
        <div class="w-full max-w-xl">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
