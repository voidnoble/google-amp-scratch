@extends('index')

@section('content')
    <h1>Welcome YourCorp NEWS AMP</h1>
    <ul>
        @foreach($articles as $article)
        <li>{{ $article->title }}</li>
        @endforeach
    </ul>
@endsection