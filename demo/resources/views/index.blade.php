<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
{{-- @dd($students) --}}
<table class="table table-bordered w-50 m-auto">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">address</th>
        <th scope="col">gender</th>
        <th scope="col">image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
     <tbody>
         @foreach ( $students as $student )
        {{-- @dump($student) --}}
         <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->gender}}</td>
            <td><img src="{{$student->image}}" alt="studentImage" srcset=""></td>
            <td>
                <a href="{{route('students.show',$student->id)}}"><button class="btn btn-warning" >Show</button></a>
                <button class="btn btn-danger" >Delete</button>
            </td>
          </tr>
        @endforeach


    </tbody>
  </table>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
