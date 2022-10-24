<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>


    </head>
    <body class="bg-gray-100 text-gray-700">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 my-10">
                @foreach ($bicicletas as $bicicleta)
                <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">
                    <h2 class="font-bold text-lg mb-4">{{ $bicicleta->title }}</h2>
                    <p class="text-xs">{{ $bicicleta->excerpt }}</p>
                    <p class="text-xs text-right">{{ $bicicleta->published_at }}</p>
                </div>
                @endforeach
            </div>
            <div class="mb-10 font-bold">
                {{ $bicicletas->links() }}
            </div>
        </div>      
    </body>
</html>
