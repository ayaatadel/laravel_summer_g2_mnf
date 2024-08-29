<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
{{-- @dd($track) --}}
<table class="table table-bordered w-50 m-auto">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">description</th>

        <th scope="col">logo</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
     <tbody>

        {{-- @dump($student) --}}
         <tr>
            <th scope="row">{{$track->id}}</th>
            <td>{{$track->name}}</td>

            <td>{{$track->description}}</td>

            <td><img src="{{$track->logo}}" alt="studentImage" srcset=""></td>
            <td>
                {{-- <a href="{{route('students.index') }}"> --}}
                <a href="{{url()->previous()}}">
                    <button class="btn btn-warning">Back</button></a>
            </td>
          </tr>



    </tbody>
  </table>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
