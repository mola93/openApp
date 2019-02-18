@extends('layouts.app')

@section('content')
      <div class="flex items-center"> 
            <h1 class="mr-auto mb-3"> All projects </h1>
                <a href="/projects/create"> Create a new project </a>
       </div>
       <ul> 
            @forelse($projects as $project)

            <li>
                 <a href="{{ $project->path() }}" > {{ $project->title }} </a>   
            
            </li>

            @empty
            <li>No projects yet</li>

            @endforelse
       </ul>
@endsection
