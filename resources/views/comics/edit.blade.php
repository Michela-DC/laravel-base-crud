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
                <div class="form-group">
                    <label class="mr-2" for="thumb">Image</label>
                    <input class="@error('thumb') is-invalid @enderror form-control mb-4" type="text" name="thumb" id="thumb" value="{{ old('thumb') ? old('thumb') : $comic->thumb}}" placeholder="Insert comic image">
                
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="title">Title</label>
                    <input class="@error('title') is-invalid @enderror form-control mb-4" type="text" name="title" id="title" value="{{old('title') ? old('title') : $comic->title}}" placeholder="Insert comic title">
                
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="series">Series</label>
                    <input class="@error('series') is-invalid @enderror form-control mb-4" type="text" name="series" id="series" value="{{old('series') ? old('series') : $comic->series}}" placeholder="Insert comic series">
                
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="description">Description</label>
                    <textarea class="form-control mb-4" name="description" id="description" placeholder="Insert description" cols="24" rows="8">
                        {{$comic->description}}
                    </textarea>
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="type">Type</label>
                    @if ( old('type') )
                        <select class="@error('type') is-invalid @enderror form-control mb-4" name="type" id="type" value="{{$comic->type}}">
                            <option value="">Select type</option>
                            <option value="comic-book" {{old('type') == 'comic-book' ? 'selected' : ''}}>comic book</option>
                            <option value="graphic-novel" {{old('type') == 'graphic-novel' ? 'selected' : ''}}>graphic novel</option>
                        </select>
                    @else   
                        <select class="@error('type') is-invalid @enderror form-control mb-4" name="type" id="type" value="{{$comic->type}}">
                            <option value="">Select type</option>
                            <option value="comic-book" {{$comic->type == 'comic-book' ? 'selected' : ''}}>comic book</option>
                            <option value="graphic-novel" {{$comic->type == 'graphic-novel' ? 'selected' : ''}}>graphic novel</option>
                        </select>
                    @endif

                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="sale_date">Sale Date</label>
                    <input class="@error('sale_date') is-invalid @enderror form-control mb-4" type="date" name="sale_date" id="sale_date" value="{{old('sale_date') ? old('sale_date') : $comic->sale_date}}"  placeholder="Insert sale date">
                    
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="price">U.S. Price</label>
                    <input class="@error('price') is-invalid @enderror form-control mb-4" type="text" name="price" id="price" value="{{old('price') ? old('price') : $comic->price}}" placeholder="Insert comic price">
                
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group py-2">
                    <input class="my-submit mb-5 py-1 px-2" type="submit" value="Edit">
                </div>
    
            </form>
        </div>
    </div>

@endsection