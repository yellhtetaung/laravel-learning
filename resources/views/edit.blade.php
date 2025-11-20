<x-layout>

    <a href="/posts" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <form action="/posts/{{ $post->id }}" method="POST" class="card mt-5">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter post name"
                    value="{{ old('name', $post->name) }}">
                @error('name')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter post description">{{ old('description', $post->description) }}</textarea>
                @error('description ')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id" id="category_id" aria-label="Default select example">
                    <option selected disabled>Select the category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-end align-items-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

</x-layout>
