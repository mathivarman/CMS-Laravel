@extends("backend.layouts.app")
@section("content")
    <div class="d-flex justify-content-center">
        <div class="card shadow" style="width: 600px;">
            <div class="card-body">
                <form action="{{ route('post.store') }}" method="POST">
                    <h1>Create Post</h1>
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" maxlength="255" required>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" maxlength="255">
                    </div>
                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt</label>
                        <input type="text" class="form-control" id="excerpt" name="excerpt" maxlength="400">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="draft">Draft</option>
                            <option value="scheduled">Scheduled</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="published_at" class="form-label">Published At</label>
                        <input type="datetime-local" class="form-control" id="published_at" name="published_at">
                    </div>
                    <div class="mb-3">
                        <label for="expires_at" class="form-label">Expires At</label>
                        <input type="datetime-local" class="form-control" id="expires_at" name="expires_at">
                    </div>
                    <div class="mb-3">
                        <label for="is_featured" class="form-label">Featured</label>
                        <select class="form-control" id="is_featured" name="is_featured">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="featured_media_id" class="form-label">Featured Media ID</label>
                        <input type="number" class="form-control" id="featured_media_id" name="featured_media_id">
                    </div>
                    <div class="mb-3">
                        <label for="meta" class="form-label">Meta</label>
                        <textarea class="form-control" id="meta" name="meta" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="auther_id" class="form-label">Author ID</label>
                        <input type="number" class="form-control" id="auther_id" name="auther_id">
                    </div>
                    <div class="mb-3">
                        <label for="editor_id" class="form-label">Editor ID</label>
                        <input type="number" class="form-control" id="editor_id" name="editor_id">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
