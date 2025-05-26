@extends('layout')
@section('content')
<h2>{{ $post->title }}</h2>
<p>{{ $post->body }}</p>

<a href="{{ route('posts.index') }}">Back to list</a>
<a href="{{ route('posts.edit', $post->id) }}">Edit</a>
<form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection