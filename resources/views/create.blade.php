<x-layout>

    <a href="/posts" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <form action="/posts" method="POST" class="card mt-5">
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter post name">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter post description"></textarea>
            </div>

            <div class="d-flex justify-content-end align-items-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</x-layout>
