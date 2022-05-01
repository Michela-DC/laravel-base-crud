@extends('layouts.home')

@section('metaTitle', 'DC Comics')

@section('mainContent')

    <div class="my-title-container">
        <div class="my-title-row bg-light m-auto text-center py-3">
            <h1 class="font-weight-bold mb-3">DC Comics</h1>
        </div>
    </div>
    
    <div class="container d-flex justify-content-center py-4">
        <div class="row"> 
            <button class="my-btn p-2 rounded">
                <a href="{{route('comics.create')}}">
                    Add new comic
                </a>
            </button>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr class="font-weight-bold">
                    <th>Image</th>
                    <th>Title</th>
                    <th>Series</th>
                    <th>Type</th>
                    <th>Sale date</th>
                    <th>Price</th>
                    <th>Show comic</th>
                    <th>Edit comic</th>
                    <th>Delete Comic</th>
                </tr>
            </thead>
        
            <tbody>
        
                @foreach ($comics as $comic)
                    <tr>
                        <td>
                            <img src="{{$comic->thumb}}" alt="">
                        </td>
                        <td>
                            {{$comic->title}}
                        </td>
                        <td>
                            {{$comic->series}}
                        </td>
                        <td>
                            {{$comic->type}}
                        </td>
                        <td>
                            {{$comic->sale_date}}
                        </td>
                        <td>
                        $ {{$comic->price}}
                        </td>
                        <td>
                            <a href="{{route ('comics.show',$comic->id)}} ">Show: {{$comic->title}}</a>
                        </td>
                        <td>
                            <button class="my-btn p-2 rounded">
                                <a href="{{route ('comics.edit',$comic->id)}} ">Edit Comic</a>
                            </button>
                        </td>
                        <td>
                            {{-- per usare il metodo destroy del controller devo creare un form con dentro:
                            la action che rimanda alla route destroy + passa il parametro, il token csrf e la direttiva @method(DELETE) --}}
                            <form class="delete-form" action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf {{-- il token di sicurezza va sempre messo nei form --}}
                                @method('DELETE')
                                <input class="my-submit p-2 rounded" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
        
            </tbody>
        </table>
    </div>
    
@endsection