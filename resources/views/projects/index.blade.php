<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

      
    </head>
    <body>
       <h1>All projects </h1>

       <ul> 
            @foreach($projects as $project)

            <li>{{ $project->title }} </li>

            @endforeach
       </ul>
    </body>
</html>
