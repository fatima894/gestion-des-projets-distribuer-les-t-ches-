@extends('layouts.app')
@section('content')

<div class="container">
<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-dark">
                                        <strong class="card-title text-light">The  Project is: {{ $project->title }}</strong>
                                    </div>
                                    <div class="card-body text-white bg-danger">
                                        <p class="card-text text-light">{{ $project->descreption}}
                                        </p>
                                    </div>
                                </div>
                            </div>
 
  <h1 class="title-5 m-b-35">Our Tasks are:</h1>
<div class="table-responsive table--no-card m-b-30">
  <table class="table table-borderless table-striped table-earning">
    <thead>
      <tr>
        <!-- <th scope="col">Name projet</th>-->
        <th scope="col">Developper</th>
        <th scope="col">Title</th>
        <th scope="col">Descreption</th>
        <th scope="col">Status</th>
        <th scope="col">Priority</th>
        <th scope="col">Created At </th>
        <th scope="col">Date delivre</th>
        @if(auth()->user()->email == 'abdelah@gmail.com')
        <th scope="col">Actions</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $item)
      @if($item->project_id == $id_prj )
        @if($item->user_id==Auth::id() or auth()->user()->email == 'abdelah@gmail.com')
      <tr>
        <!--<td>{{ $item->projet->title }}</td>-->
        <td>{{ $item->user->name }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->descreption }}</td>
        
        @if(auth()->user()->email == 'abdelah@gmail.com')
        <td style="color: {{$item->status->color }}">{{ $item->status->title }}</td>
        @else
        <td>
      <form action="{{ route('tasks.update_status', ['id' => $item->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <select name="status_id"  class="form-control">
            @foreach ($statuses as $status)
                <option value="{{ $status->id }}" {{ $status->id == $item->status_id ? 'selected' : '' }}>
                    {{ $status->title }}
                </option>
            @endforeach
        </select>
        <button type="submit">Save</button>
       </form></td>
    @endif


     <td style="color: {{ $item->priority->color }}">{{ $item->priority->title }}</td> 
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->date_delivre }}</td>
        
        @if(auth()->user()->email == 'abdelah@gmail.com')
        <td>
          <a href="{{ route('tasks.edit', ['id'=>$item->id]) }}" >
            <i class="fa-solid fa-pen-to-square fa-2xl"></i>
          </a>
        </td>
        <td>
          <a href="{{ route('tasks.destroy', ['id'=>$item->id]) }}"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?')">
            <i class="fa-solid fa-trash fa-2xl" style="color: red;"></i>
          </a>
        </td>
        <td>
          <a href="{{ route('tasks.show', ['id'=>$item->id]) }}" >
            <i class="fa-solid fa-eye fa-shake fa-2xl" style="color: #33871c; "></i>
          </a>
        </td>
        @endif
        @endif
      </tr>
      @endif
      @endforeach
    </tbody>

  </table>
  </div>
</div>
@if(auth()->user()->email == 'abdelah@gmail.com')



@endif
<br>
<div class="container">
       
        <a href="javascript:history.back()">
            <button class="btn btn-danger ">Go Back</button>
        </a>
        @if(auth()->user()->name == 'abdelah')
<a   class="btn btn-success btn-lg btn-block" href="{{route('tasks.create',['id_prj' =>$project->id])}}"> create task </a>
@endif
    </div>

@endsection
