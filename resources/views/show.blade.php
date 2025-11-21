<x-layout>

    <a href="/posts" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <div class="mt-6 border-b border-gray-300 pb-8">
        <h1 class="font-bold text-2xl mb-4">{{ $post->name }}</h1>
        <p class="mb-4">{{ $post->description }}</p>
        <p class="text-sm text-gray-600">Category: <span class="font-bold italic">{{ $post->category->name }}</span></p>
    </div>

    <div class="mt-6 flex justify-end items-center gap-x-3">
        <a href="/posts/{{ $post->id }}/edit" class="btn-warning">
            <i class="fa-solid fa-edit"></i>
            Edit Post
        </a>


        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger">
                <i class="fa-solid fa-trash"></i>
                Delete Post
            </button>
        </form>
    </div>
</x-layout>
