@extends('layouts.app')

@section('content')

{{Form::model($post, ['route' => ['data.update', $post->id], 'method'=>'PUT'])}}
    {{Form::text('title')}}
    {{Form::submit('Save', ['class'=>'btn btn-success'])}}
{!! Form::close() !!}
@endsection