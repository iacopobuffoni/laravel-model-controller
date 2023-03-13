<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col text-center">

                        <div class="card">
                            <div class="card-body">

                                <h1 class="card-title"> Movies </h1>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h2>
                                    {{ $movie -> title }}
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>

    </body>
</html>
