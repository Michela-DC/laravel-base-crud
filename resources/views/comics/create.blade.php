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
    
                <div>
                    <label class="mr-2" for="poster">Image</label>
                    <input class="form-control mb-4" type="text" name="thumb" id="poster" placeholder="Insert comic image">
                </div>
    
                <div>
                    <label class="mr-2" for="title">Title</label>
                    <input class="form-control mb-4" type="text" name="title" id="title" placeholder="Insert comic title">
                </div>
    
                <div>
                    <label class="mr-2" for="series">Series</label>
                    <input class="form-control mb-4" type="text" name="series" id="series" placeholder="Insert comic series">
                </div>
    
                <div>
                    <label class="mr-2" for="desciption">Description</label>
                    <textarea class="form-control mb-4" name="description" id="description" placeholder="Insert description" cols="24" rows="8"></textarea>
                </div>
    
                <div>
                    <label class="mr-2" for="type">Type</label>
                    <select class="form-control mb-4" name="type" id="type">
                        <option value="comic-book">comic book</option>
                        <option value="graphic-novel">graphic novel</option>
                    </select>
                </div>
    
                <div>
                    <label class="mr-2" for="sale_date">Sale Date</label>
                    <input class="form-control mb-4" type="date" name="sale_date" id="sale_date" placeholder="Insert sale date">
                </div>
    
                <div>
                    <label class="mr-2" for="price">U.S. Price</label>
                    <input class="form-control mb-5" type="text" name="price" id="price" placeholder="Insert comic price">
                </div>
                
                <div class="py-2">
                    <input class="my-submit mb-5 py-1 px-2" type="submit" value="Create">
                </div>
    
            </form>

        </div>
    </div>

@endsection