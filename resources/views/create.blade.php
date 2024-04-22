@extends('layout.main')

   
@section('container')
<div class="row justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-8"> <!-- Adjust column width as needed -->
        <div class="card" style="border-radius: 39px;">
            <div class="card-header">
                <h2 class="text-center">Add New Project</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" style="height:150px" name="description" placeholder="Description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="url">Url:</label>
                        <input type="text" id="url" name="url" class="form-control" placeholder="Url <Optional>">
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" required placeholder="image" onchange="updateFileName(this)">
                        <label class="custom-file-label" for="image" id="image-label">Choose Image...</label>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function updateFileName(input) {
        var fileName = input.files[0].name;
        document.getElementById('image-label').innerText = fileName;
    }
</script>
@endsection
