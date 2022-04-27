@extends('layouts.home')

@section('metaTitle', 'Edit comic')

@section('mainContent')

    <div class="container">
        <h1>Edit comic</h1>
        <img src="{{$comic->thumb}}" alt="">
    </div>

    <div class="container">
        <form action="{{route('comics.update', $comic)}}" method="POST"> 
            @csrf
            @method('PUT') {{-- questo potrei anche scriverlo come <input type="hidden" name="_method" value="PUT"> --}}
            {{-- i dati del form vengono inviati alla rotta che specifico in action: 
            nella edit vengono inviati alla update che andrà a modificare i dati, poi 
            devo aggiungere il metodo post e il token di sicurezza csrf--}}

            {{-- nella edit il form deve essere precompilato con i dati attuali dell'elemento che voglio modificare --}}
            <div>
                <label for="poster">Poster</label>
                <input type="text" name="thumb" id="poster" value="{{$comic->thumb}}" placeholder="Insert comic image">
            </div>

            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{$comic->title}}" placeholder="Insert comic title">
            </div>

            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series" value="{{$comic->series}}" placeholder="Insert comic series">
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Insert description" cols="24" rows="8">
                    {{$comic->description}}
                </textarea>
            </div>

            <div>
                <label for="type">Type</label>
                <select name="type" id="type" value="{{$comic->type}}">
                    <option value="">Select type</option>
                    <option value="comic-book" {{$comic->type == 'comic book' ? 'selected' : ''}}>comic book</option>
                    <option value="graphic-novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
                </select>
            </div>

            <div>
                <label for="sale_date">Sale Date</label>
                <input type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}"  placeholder="Insert sale date">
            </div>

            <div>
                <label for="price">U.S. Price</label>
                <input type="text" name="price" id="price" value="{{$comic->price}}" placeholder="Insert comic price">
            </div>

            <input type="submit" value="Edit">

        </form>
    </div>

@endsection