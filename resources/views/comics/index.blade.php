@extends('layouts.app')

@section('content')

<table>
    <thead>
        <th>Cover</th>
        <th>Title</th>
        <th>Series</th>
        <th>Description</th>
        <th>Type</th>
        <th>Sale date</th>
        <th>Price</th>
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
            </tr>
        @endforeach

    </tbody>
</table>

@endsection