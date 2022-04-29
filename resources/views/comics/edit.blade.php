@extends('layouts.home')

@section('metaTitle', 'Edit comic')

@section('mainContent')

    <div class="my-title-container text-center mb-5">
        <div class="my-title-row bg-light m-auto text-center py-3">
            <h1>Edit comic</h1>
        </div>
    </div>
    
    <div class="container text-center">
        <div class="row flex-column">

            <figure>
                <img src="{{$comic->thumb}}" alt="">
            </figure>
    
            <form action="{{route('comics.update', $comic)}}" method="POST" class="col-7 m-auto"> 
                @csrf
                @method('PUT') {{-- questo potrei anche scriverlo come <input type="hidden" name="_method" value="PUT"> --}}
                {{-- i dati del form vengono inviati alla rotta che specifico in action: 
                nella edit vengono inviati alla update che andrà a modificare i dati, poi 
                devo aggiungere il metodo post e il token di sicurezza csrf--}}
    
                {{-- nella edit il form deve essere precompilato con i dati attuali dell'elemento che voglio modificare --}}
                <div>
                    <label class="mr-2" for="poster">Image</label>
                    <input class="form-control mb-4" type="text" name="thumb" id="poster" value="{{$comic->thumb}}" placeholder="Insert comic image">
                </div>
    
                <div>
                    <label class="mr-2" for="title">Title</label>
                    <input class="form-control mb-4" type="text" name="title" id="title" value="{{$comic->title}}" placeholder="Insert comic title">
                </div>
    
                <div>
                    <label class="mr-2" for="series">Series</label>
                    <input class="form-control mb-4" type="text" name="series" id="series" value="{{$comic->series}}" placeholder="Insert comic series">
                </div>
    
                <div>
                    <label class="mr-2" for="description">Description</label>
                    <textarea class="form-control mb-4" name="description" id="description" placeholder="Insert description" cols="24" rows="8">
                        {{$comic->description}}
                    </textarea>
                </div>
    
                <div>
                    <label class="mr-2" for="type">Type</label>
                    <select class="form-control mb-4" name="type" id="type" value="{{$comic->type}}">
                        <option value="">Select type</option>
                        <option value="comic-book" {{$comic->type == 'comic book' ? 'selected' : ''}}>comic book</option>
                        <option value="graphic-novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
                    </select>
                </div>
    
                <div>
                    <label class="mr-2" for="sale_date">Sale Date</label>
                    <input class="form-control mb-4" type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}"  placeholder="Insert sale date">
                </div>
    
                <div>
                    <label class="mr-2" for="price">U.S. Price</label>
                    <input class="form-control mb-4" type="text" name="price" id="price" value="{{$comic->price}}" placeholder="Insert comic price">
                </div>
    
                <div class="py-2">
                    <input class="my-submit mb-5 py-1 px-2" type="submit" value="Edit">
                </div>
    
            </form>
        </div>
    </div>

@endsection