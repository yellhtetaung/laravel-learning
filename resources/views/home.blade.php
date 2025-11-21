<x-layout>

    <div class="w-full flex justify-end items-center gap-x-2 mt-5">
        <a href="/posts/create" class="btn-primary">Create Post</a>
        <a href="/logout" class="btn-danger">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>
    </div>

    <div class="mt-6">
        @if ($posts->isEmpty())
            <p class="text-gray-600">No posts available.</p>
        @else
            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        @endif
    </div>

</x-layout>
