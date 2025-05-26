@extends('layout')

@section('content')
<style>
    .create-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }
    .create-card .card-header {
        background: linear-gradient(to right, rgb(85, 39, 112), rgb(111, 93, 139));
        color: white;
        border-bottom: none;
    }
    .btn-submit {
        background: linear-gradient(to right, rgb(85, 39, 112), rgb(111, 93, 139)) !important;
        border: none !important;
        color: white !important;
        transition: all 0.3s ease;
    }
    .btn-submit:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
</style>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow create-card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Create New Post</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                            id="title" name="title" value="{{ old('title') }}" 
                            placeholder="Enter post title" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Content</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" 
                            id="body" name="body" rows="6" 
                            placeholder="Write your post content here" required>{{ old('body') }}</textarea>
                        @error('body')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times me-1"></i>Cancel
                        </a>
                        <button type="submit" class="btn btn-submit">
                            <i class="fas fa-save me-1"></i>Create Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection