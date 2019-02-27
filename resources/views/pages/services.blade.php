@extends('layouts.app')


@section('content')
    
<div class="title m-b-md">
    {{$title}}
</div>

<p>Our Services</p>

@if(count($services) > 0)

<ul class="list-group">
    @foreach($services as $service)
        <li class="list-group-item">{{$service}}</li>
    @endforeach
</ul>

@endif

@endsection

        
