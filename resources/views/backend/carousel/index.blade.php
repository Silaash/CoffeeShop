@include('backend.layout.app')
<main id="main" class="main">
    <div class="container text-center">
        <a href="{{ route('carousel.create') }}"><button type="button" class="btn btn-primary mb-3">create</button></a>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td >1</td>
                    <td>carousel</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>