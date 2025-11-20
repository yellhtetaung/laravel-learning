<x-layout>

    <div class="w-full d-flex justify-content-end align-items-center">
        <a href="/posts/create" class="btn btn-primary">Create Post</a>
    </div>

    <div class="my-5">
        <div class="card mt-2">
            <h5 class="card-header text-center">Posts</h5>

            <div class="card-body">
                @if ($posts->isEmpty())
                    <div class="d-flex justify-content-center align-items-center">
                        <p>No Data</p>
                    </div>
                @else
                    @foreach ($posts as $post)
                        <div class="px-3">
                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text">{{ $post->description }}</p>
                            <a href="/posts/{{ $post->id }}">View Details</a>
                            <hr />
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="mt-3">
            {{ $posts->links() }}
        </div>
    </div>



</x-layout>
