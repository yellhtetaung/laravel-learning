<x-layout>

    <a href="/posts" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">{{ $post->name }}</h5>
            <p class="card-text">{{ $post->description }}</p>
        </div>

        <div class="card-footer d-flex justify-content-start align-items-center gap-2">
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">
                <i class="fa-solid fa-edit"></i>
                Edit
            </a>

            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                    Delete
                </button>
            </form>
        </div>
    </div>
</x-layout>
