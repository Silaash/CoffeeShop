@include('backend.layout.app')
<main id="main" class="main">
    <div class="container">
        <a href="{{ route('carousel.index') }}"><button type="button" class="btn btn-primary mb-3">Back</button></a>
        <form action="{{ route('carousel.store') }}" method="post">
            @csrf
            <div class="row mb-5">
                <div class="col">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control " placeholder="Title" aria-label="Title" required>
                </div>
                <div class="col">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <textarea name="description" class="mysummernote"  cols="30" rows="5">Description</textarea>
                </div>
        </div>
        <button type="submit" class="btn btn-primary my-5">Save</button>
    </form>
    </div>
</main>
