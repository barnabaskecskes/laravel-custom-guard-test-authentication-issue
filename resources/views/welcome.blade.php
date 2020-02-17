<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex flex-col items-center justify-center min-h-screen">
            @if ($user)
                <h1 class="text-2xl font-semibold">Logged in user:</h1>
                <p>{{ $user->name }}</p>
            @else
                <h1 class="text-2xl font-semibold">There is no user logged in.</h1>
                <p>
                    <a class="text-blue-600 underline" href="/login">Login via this link</a>
                </p>
            @endif

            <div class="flex mt-12">
                <p class="bg-gray-200 p-6">
                    <span class="font-medium mr-2">Web Guard User:</span> {{ optional(auth()->guard('web')->user())->name ?? '-' }}
                </p>
                <p class="bg-gray-200 p-6 ml-8">
                    <span class="font-medium mr-2">Admin Guard User:</span> {{ optional(auth()->guard('admin')->user())->name ?? '-' }}
                </p>
            </div>
        </div>
    </body>
</html>
