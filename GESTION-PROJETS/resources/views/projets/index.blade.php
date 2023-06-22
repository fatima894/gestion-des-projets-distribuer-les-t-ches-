@extends('layouts.app')
@section('content')


<div class="container">
  <h1>Our projects are:</h1>
  <div class='container'>
      <div class='search'>
          <input type="search" name='search' id="search" 
          placeholder="search for something" class="form-control">
      </div>
  </div>
  <td id="content" > </td>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Project number </th>
        <th scope="col">Boss</th>
        <th scope="col">Title</th>
        <th scope="col">Descreption</th>
        @if(auth()->user()->email == 'abdelah@gmail.com')
          <th scope="col">Actions</th>
        @endif
      </tr>
    </thead>
    <tbody >
      @foreach($projects as $item)
      
        @php
          $hasTask = false;
          foreach($tasks as $task) {
            if(($task->project_id == $item->id and $task->user_id==auth()->user()->id) or auth()->user()->email == 'abdelah@gmail.com') {
              $hasTask = true;
              break;
            }
          }
        @endphp
        @if($hasTask)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->user->name}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->descreption}}</td>
            
            @if(auth()->user()->email == 'abdelah@gmail.com')
              <td>
                <a href="{{route('projets.edit', ['id'=>$item->id])}}"><i  style="fa-2xl"class="fa-solid fa-pen-to-square"></i></a>
              </td>
              <td>
                <a href="{{route('projets.destroy', ['id'=>$item->id])}}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">
                  <i class="fa-solid fa-trash" style="color: red; fa-2xl"></i>
                </a>
              </td>
              <td>
                <a href="{{route('projets.show', ['id'=>$item->id])}}"><i class="fa-solid fa-eye fa-shake" style="color: #33871c; fa-2xl"></i></a>
              </td>
           
              
            @endif
            <td>
                <a href="{{ route('tasks', ['id_prj' =>$item->id]) }}">
                  <button class="btn btn-danger">Show All Tasks</button>
                </a>
              </td>
           
          </tr>
      @endif
    @endforeach

    </tbody>
   
  </table>
  <script type="text/javascript">
     $('#search').on('keyup',function(){
      $value=$(this).val();
      $.ajax({

          type:'get',
          url:'{{URL::to('search')}}',
          data:{'search':$value},
          success:function(data){
            console.log(data);
            $('#content').html(data);
          }

      });
     })
  </script>
</div>

<div class='container'>
    @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $item)
          <li>{{$item}}</li>
        @endforeach
      </ul>
    @endif
    @if(auth()->user()->email == 'abdelah@gmail.com')
      <h3 style="padding-top: 20px;">You can create another project:</h3>
      <form action="{{route('projets.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" name='title' class="form-control">
        </div>
        <div class="mb-3">
          <label for="bio" class="form-label">Descreption</label>
          <input type="textarea" name="descreption" class="form-control">
        </div>
        <button type="submit" class="btn btn-danger">Save</button>
      </form>
    @endif
  </div>

@endsection
