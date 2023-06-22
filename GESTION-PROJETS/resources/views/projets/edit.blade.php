@extends('layouts.app')
@section('content')

<div class='container'>
    @if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $item)
        <li> {{$item}}</li>
        @endforeach
    </ul>
    @endif
    <div>
        <a href="{{ route('projets') }}"><button class='btn btn-primary'> All projets </button></a>
    </div>
    <form action="{{ route('projets.update', ['id' => $projet->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Edit project</h1>
        <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" value="{{ $projet->title }}" name="title" class="form-control">
      </div>
      
      <div class="mb-3">
        <label for="bio" class="form-label">Descreption</label>
        <input type="text" value="{{ $projet->descreption }}" name="descreption" class="form-control">
      </div>
      <button type="submit" class="btn btn-danger">Edit</button>
    </form>
</div>
<br>
<div  class='container'>
<a  class='btn btn-primary 'href="{{route('tasks.create',['id_prj' =>$projet->id])}}"> create task </a>
</div>
<div class="container">
       
        <a href="javascript:history.back()">
            <button class="btn btn-danger">Go Back</button>
        </a>
       
    </div>
@endsection
