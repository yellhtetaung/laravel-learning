<x-layout>
    <div class="container col-12 col-md-10 col-lg-8">
        @foreach ($posts as $post)
            <div class="card mt-2">
                <h5 class="card-header">{{ $post->name }}</h5>

                <div class="card-body">
                    <h5 class="card-title">{{ $post->name }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
