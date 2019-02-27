@extends('layouts.app')


@section('content')
    
<div class="title m-b-md">
    {{$title}}
     <!-- ?php echo $title; ? --> 
</div>

<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{$title}}</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
</section>

<p>Developing my app in Laravel</p>

<div class="links">
    <a href="https://laravel.com/docs">Documentation</a>
    <a href="https://laracasts.com">Laracasts</a>
    <a href="https://laravel-news.com">News</a>
    <a href="https://nova.laravel.com">Nova</a>
    <a href="https://forge.laravel.com">Forge</a>
    <a href="https://github.com/laravel/laravel">GitHub</a>
</div>

@endsection

        
