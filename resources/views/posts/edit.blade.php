@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-warning">
                <h5 class="mb-0"><i class="fas fa-edit me-2"></i>Edit Post</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                            id="title" name="title" value="{{ old('title', $post->title) }}" 
                            placeholder="Enter post title" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Content</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" 
                            id="body" name="body" rows="6" 
                            placeholder="Write your post content here" required>{{ old('body', $post->body) }}</textarea>
                        @error('body')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times me-1"></i>Cancel
                        </a>
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-save me-1"></i>Update Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection