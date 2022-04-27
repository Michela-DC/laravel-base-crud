@extends('layouts.home')

@section('metaTitle', 'Add new comic')

@section('mainContent')

    <h1>Add new comic</h1>

    <div class="container">
        <form action="{{route('comics.store')}}" method="post"> 
            @csrf
        {{-- i dati del form vengono inviati alla rotta che specifico in action
        e devo aggiungere il metodo post eil metodo e il token di sicurezza--}}

            <div>
                <label for="poster">Poster</label>
                <input type="text" name="thumb" id="poster" placeholder="Insert comic image">
            </div>

            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Insert comic title">
            </div>

            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series" placeholder="Insert comic series">
            </div>

            <div>
                <label for="desciption">Description</label>
                <textarea name="description" id="description" placeholder="Insert description" cols="24" rows="8"></textarea>
            </div>

            <div>
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="comic-book">comic book</option>
                    <option value="graphic-novel">graphic novel</option>
                </select>
            </div>

            <div>
                <label for="sale_date">Sale Date</label>
                <input type="date" name="sale_date" id="sale_date" placeholder="Insert sale date">
            </div>

            <div>
                <label for="price">U.S. Price</label>
                <input type="text" name="price" id="price" placeholder="Insert comic price">
            </div>

            <input type="submit" value="Create">

        </form>
    </div>

@endsection