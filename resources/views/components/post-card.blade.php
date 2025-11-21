<div class="border border-gray-300 rounded-lg p-4 mb-4 shadow-sm hover:shadow-md transition-shadow duration-200">
    <h2 class="font-bold text-lg mb-2">{{ $post->name }}</h2>
    <div class="mb-4">
        {{ Str::limit($post->description, 150) }}
    </div>
    <p class="text-sm text-gray-600 mb-4">Category: {{ $post->category->name }}</p>
    <a href="/posts/{{ $post->id }}" class="text-indigo-600 hover:underline">Read More</a>
</div>
