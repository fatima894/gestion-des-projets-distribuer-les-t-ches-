@extends('layouts.app')
@section('content')

<div class="container">
  <h3>The  users are :</h3>

  <table class="table">
    <thead>
      <tr>
        <!-- <th scope="col">Name projet</th>-->
        <th scope="col">Developper</th>
        <th scope="col">email</th>
        <th scope="col">garde</th>
        <th scope="col">bio</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $item)
      <tr>
        <!--<td>{{ $item->projet->title }}</td>-->
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        @if(auth()->user()->email == 'abdelah@gmail.com')
        <td>{{ $item->status->title }}</td>
        @else
        <td>
      <form action="{{ route('tasks.update_status', ['id' => $item->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <select name="status_id" class="form-control">
            @foreach ($statuses as $status)
                <option value="{{ $status->id }}" {{ $status->id == $item->status_id ? 'selected' : '' }}>
                    {{ $status->title }}
                </option>
            @endforeach
        </select>
        <button type="submit">Save</button>
       </form></td>
    @endif


     <td>{{ $item->priority->title }}</td> 
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->date_delivre }}</td>
        
        @if(auth()->user()->email == 'abdelah@gmail.com')
        <td>
          <a href="{{ route('tasks.edit', ['id'=>$item->id]) }}" >
            <i class="fa-solid fa-pen-to-square fa-2xl"></i>
          </a>
        </td>
        <td>
          <a href="{{ route('tasks.destroy', ['id'=>$item->id]) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?')">
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
@if(auth()->user()->email == 'abdelah@gmail.com')



@endif
<br>
<div class="container">
       
        <a href="javascript:history.back()">
            <button class="btn btn-danger">Go Back</button>
        </a>
       
    </div>

@endsection
