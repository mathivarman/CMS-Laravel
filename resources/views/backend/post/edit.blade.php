@extends("backend.layouts.app")
@section("content")
    <div class="d-flex justify-content-center">
        <div class="card shadow" style="width: 600px;">
            <div class="card-body">
                <form action="{{ route('post.update', $post->id) }}" method="POST">
                    <h1>Edit Post</h1>
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" maxlength="255" required value="{{ $post->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" maxlength="255" value="{{ $post->slug }}">
                    </div>
                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt</label>
                        <input type="text" class="form-control" id="excerpt" name="excerpt" maxlength="400" value="{{ $post->excerpt }}">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="5">{{ $post->body }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="scheduled" {{ $post->status == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                            <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="published_at" class="form-label">Published At</label>
                        <input type="datetime-local" class="form-control" id="published_at" name="published_at" value="{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('Y-m-d\TH:i') : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="expires_at" class="form-label">Expires At</label>
                        <input type="datetime-local" class="form-control" id="expires_at" name="expires_at" value="{{ $post->expires_at ? \Carbon\Carbon::parse($post->expires_at)->format('Y-m-d\TH:i') : '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="is_featured" class="form-label">Featured</label>
                        <select class="form-control" id="is_featured" name="is_featured">
                            <option value="0" {{ $post->is_featured == 0 ? 'selected' : '' }}>No</option>
                            <option value="1" {{ $post->is_featured == 1 ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="featured_media_id" class="form-label">Featured Media ID</label>
                        <input type="number" class="form-control" id="featured_media_id" name="featured_media_id" value="{{ $post->featured_media_id }}">
                    </div>
                    <div class="mb-3">
                        <label for="meta" class="form-label">Meta</label>
                        <textarea class="form-control" id="meta" name="meta" rows="3">{{ $post->meta }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="auther_id" class="form-label">Author ID</label>
                        <input type="number" class="form-control" id="auther_id" name="auther_id" value="{{ $post->auther_id }}">
                    </div>
                    <div class="mb-3">
                        <label for="editor_id" class="form-label">Editor ID</label>
                        <input type="number" class="form-control" id="editor_id" name="editor_id" value="{{ $post->editor_id }}">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
