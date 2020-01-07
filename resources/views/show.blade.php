@extends('layouts.app')

@section('content')

{{Form::model($post, ['route' => ['data.destroy', $post->id], 'method'=>'DELETE'])}}
    {{Form::text('title')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
{!! Form::close() !!}

<p>This is a show page {{$post->title}} </p>

@endsection