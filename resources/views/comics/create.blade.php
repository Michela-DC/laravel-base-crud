@extends('layouts.home')

@section('metaTitle', 'Add new comic')

@section('mainContent')

    <div class="my-title-container text-center mb-4">
        <div class="my-title-row bg-light m-auto text-center py-3">
            <h1>Add new comic</h1>
        </div>
    </div>


    <div class="container text-center">
        <div class="row">

            <form action="{{route('comics.store')}}" method="POST" class="col-7 m-auto"> 
                @csrf 
                {{-- i dati del form vengono inviati alla rotta che specifico in action, 
                nella create vengono inviati allo store, poi devo aggiungere il metodo post 
                e il token di sicurezza csrf--}}
    
                <div class="form-group">
                    <label class="mr-2" for="thumb">Image</label>
                    <input class="@error('thumb') is-invalid @enderror form-control mb-4" type="text" name="thumb" value="{{ old('thumb')}}" id="thumb" placeholder="Insert comic image">
                
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="title">Title</label>
                    <input class="@error('title') is-invalid @enderror form-control mb-4" type="text" name="title" value="{{ old('title')}}" id="title" placeholder="Insert comic title">
                    
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="series">Series</label>
                    <input class="@error('series') is-invalid @enderror form-control mb-4" type="text" name="series" value="{{ old('series')}}"id="series" placeholder="Insert comic series">

                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="description">Description</label>
                    <textarea class="form-control mb-4" name="description" id="description" placeholder="Insert description" cols="24" rows="8">{{ old('description')}}</textarea>
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="type">Type</label>
                    <select class="@error('type') is-invalid @enderror form-control mb-4" name="type" id="type">
                        <option value="">Select type</option>
                        <option value="comic-book" {{ old('type' == 'comic-book' ? 'selected' : '') }}>comic book</option>
                        <option value="graphic-novel" {{ old('type' == 'graphic-novel' ? 'selected' : '') }}>graphic novel</option>
                    </select>

                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="sale_date">Sale Date</label>
                    <input class="@error('sale_date') is-invalid @enderror form-control mb-4" type="date" name="sale_date" value="{{ old('sale_date')}}" id="sale_date" placeholder="Insert sale date">
                    
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="mr-2" for="price">U.S. Price</label>
                    <input class="price @error('price') is-invalid @enderror form-control mb-5" type="text" name="price" value="{{ old('price')}}" id="price" placeholder="Insert comic price">

                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="py-2 form-group">
                    <input class="my-submit mb-3 py-1 px-2" type="submit" value="Create">
                </div>
    
            </form>

        </div>
    </div>

@endsection