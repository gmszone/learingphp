@extends('template')

@section('nav')


@stop

@section('title')
hello
@stop

@section('content')
@foreach ($posts as $blogs)
    标题<p>{{ $blogs->post_title}} {{ $blogs->created_at }}</p>
    正文<p>{{ $blogs->post_content}}</p>
    <a href="/" rel="alternate">back</a>
@endforeach
@stop

