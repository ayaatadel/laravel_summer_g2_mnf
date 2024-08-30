<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="m-3">
    <a href="{{route('tracks.create')}}"><button class="btn btn-info" >Create Track</button></a>
   </div>

{{-- @dd($students) --}}

<table class="table table-bordered w-50 m-auto">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">description</th>
        <th scope="col">Logo</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
     <tbody>
         @foreach ( $tracks as $track )
        {{-- @dump($track) --}}
         <tr>
            <th scope="row">{{$track->id}}</th>
            <td>{{$track->name}}</td>
            <td>{{$track->description}}</td>
            <td><img src="{{$track->logo}}" style="width: 50px;height:50px; border-radius:50%" alt="trackImage" srcset=""></td>
            <td>
                <a href="{{route('tracks.show',$track->id)}}"><button class="btn btn-warning" >Show</button></a>
                  <form action="{{route('tracks.destroy',$track)}}" method="post">
                     @method('DELETE')
                     @csrf
                      <button class="btn btn-danger mt-2" >Delete</button>
                  </form>
                <div class="mt-2"> <a href="{{route('tracks.edit',$track->id)}}"><button class="btn btn-info mt-2" >Edit</button>
                </a></div>

            </td>
          </tr>
        @endforeach


    </tbody>
  </table>

<div class="mt-3 w-50 m-auto ">
    {{ $tracks->links() }}
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
