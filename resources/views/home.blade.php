 @extends('template')
 @section('main-content')
 <h2>Dashboard</h2>
 <div class="container p-4 my-3 shadow">
    <table class="table">
        <thead>
          <tr>
      
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        
            @foreach ($posts as $post)  <tr>
                <td>{{$post->title}}</td>
            <td> 
                <img style="height: 50px" src="{{asset($post->img_url)}}" alt="">
            </td>
            <td>
                <a href="{{route('editpost',$post->id)}}" class="btn btn-sm btn-primary">Edit</a>
                <a href="{{route('deletepost',$post->id)}}" class="btn btn-sm btn-danger">Delete</a>

            </td>     </tr>
            @endforeach
            
      
          
        </tbody>
      </table>
 </div>
 @endsection