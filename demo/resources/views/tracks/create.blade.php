<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <form class="w-75 m-auto mt-3 border p-3" action="{{ route('tracks.store') }}" method="POST">
        @csrf
        {{-- name --}}
        {{-- error message --}}
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {{-- name  input--}}
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name </label>
            <input type="text" class="form-control" name="name" id="exampleInputName1" aria-describedby="NameHelp">

        </div>


        {{-- desription --}}
        <div class="mb-3">
            <label for="exampleInputDescription1" class="form-label">Description </label>
            <input name="description" type="text" class="form-control" id="exampleInputDescription1">

        </div>
           {{-- error message --}}
           @error('description')
           <div class="alert alert-danger">{{ $message }}</div>
           @enderror
        {{-- Logo --}}
        <div class="mb-3">
            <label for="exampleInputLogo1" class="form-label">Logo</label>
            <input name="logo" type="text" class="form-control" id="exampleInputLogo1">

        </div>


        <button type="submit" class="btn btn-success">Create Track</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
