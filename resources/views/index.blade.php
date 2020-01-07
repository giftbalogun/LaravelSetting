@extends('layouts.app')

@section('content')

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach($post as $temp)

        <tr>
            <th scope="row">{{$temp->id}}</th>
            <td>{{$temp->title}}</td>
        </tr>
            
        @endforeach
        
    </tbody>
</table>

{!!$post->links()!!}
@endsection