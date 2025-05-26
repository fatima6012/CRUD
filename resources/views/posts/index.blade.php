@extends('layout')

@section('content')
    <style>
        .blog-title {
            color: indigo;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            background: linear-gradient(to right,rgb(85, 39, 112),rgb(111, 93, 139));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .create-btn {
            background: linear-gradient(to right, rgb(85, 39, 112), rgb(111, 93, 139)) !important;
            border: none !important;
            color: white !important;
            transition: all 0.3s ease;
        }
        .create-btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>

    <div class="d-flex justify-content-between align-items-center mb-4 bg-light p-3 rounded shadow-sm op">
        <h2 class="blog-title"><i class="fas fa-newspaper me-2"></i>Welcome to my food blog</h2>
        <a href="{{ route('posts.create') }}" class="btn create-btn">
            <i class="fas fa-plus me-2"></i>Create New Post
        </a>
    </div>

    @if($posts->isEmpty())
        <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i>No posts found. Create your first post!
        </div>
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text post-content">{{ $post->body }}</p>
                            <div class="text-muted mb-3">
                                <small><i class="far fa-clock me-1"></i>{{ $post->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">
                                        <i class="fas fa-trash me-1"></i>Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection