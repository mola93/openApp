<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

      
    </head>
    <body>
       <h1>{{ $project->title}} </h1>
       <div>{{ $project->description}} </div>
    </body>
</html>
