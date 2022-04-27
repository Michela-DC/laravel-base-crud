@extends('layouts.home')

@section('metaTitle', 'Dc Comics')

@section('mainContent')

    <div class="container">
        <h1>DC Comics</h1>
        <button>
            <a href="{{route('comics.create')}}">
                Add new comic
            </a>
        </button>
    </div>

    <div class="container">
        <table>
            <thead>
                <th>Poster</th>
                <th>Title</th>
                <th>Series</th>
                <th>Description</th>
                <th>Type</th>
                <th>Sale date</th>
                <th>Price</th>
                <th>Show comic</th>
                <th>Edit comic</th>
                <th>Delete Comic</th>
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
                            {{$comic->description}}
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
                            <button>
                                <a href="{{route ('comics.edit',$comic->id)}} ">Edit Comic</a>
                            </button>
                        </td>
                        <td>
                            {{-- per usare il metodo destroy del controller devo creare un form con dentro:
                            la action che rimanda alla route destroy + passa il parametro, il token csrf e la direttiva @method(DELETE) --}}
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf {{-- il token di sicurezza va sempre messo nei form --}}
                                @method('DELETE')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
        
            </tbody>
        </table>
    </div>
    
@endsection
