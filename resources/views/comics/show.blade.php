@extends('layouts.home')

@section('metaTitle', $comic->title)

@section('mainContent')
    <div class="container py-5">
        <div class="row d-flex flex-column justify-content-center text-center">
            <ul class="list-unstyled">
                <li class="mb-4">
                    <img class="poster"  src="{{$comic->thumb}}" alt="">
                </li>
                <li class="mb-4">
                    <h4> {{$comic->title}} </h4>
                </li>
                <li class="mb-4">
                    <span class="info">Series: </span>
                    {{$comic->series}}
                </li>
                <li class="mb-4">
                    <span class="info">Description: </span>
                    {{$comic->description}}
                </li>
                <li class="mb-4">
                    <span class="info">Type: </span>
                    {{$comic->type}}
                </li>
                <li class="mb-4">
                    <span class="info">Sale date: </span>
                    {{$comic->sale_date}}
                </li>
                <li class="mb-4">
                    <span class="info">U.S. Price: </span>
                $ {{$comic->price}}
                </li>
            </ul>
            
            <div class="container">
                <button class="my-btn p-2 rounded">
                    <a href="{{route ('comics.index')}} ">Go to home</a>
                </button>
            </div>
        </div>
    </div>
@endsection

