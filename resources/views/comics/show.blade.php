@extends('layouts.home')

@section('metaTitle', $comic->title)

@section('mainContent')
    <section>
        <ul>
            <li>
                <img src="{{$comic->thumb}}" alt="">
            </li>
            <li>
                {{$comic->title}}
            </li>
            <li>
                {{$comic->series}}
            </li>
            <li>
                {{$comic->description}}
            </li>
            <li>
                {{$comic->type}}
            </li>
            <li>
                {{$comic->sale_date}}
            </li>
            <li>
            $ {{$comic->price}}
            </li>
            <li>
                <a href="{{route ('comics.index')}} ">Go to home</a>
            </li>
        </ul>
    </section>
@endsection

