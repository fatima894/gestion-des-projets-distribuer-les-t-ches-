@extends('layouts.app')
@section('content')

<div class='container'>
    <form action="{{route('projets.store')}}" method="POST">
        @csrf
        @method('PUT')
       <div class="mb-3">
        <h1>im the create of projetc folder
            
        </h1>
    <label lass="form-label">title</label>
    <input type="text" name='title' class="form-control"  >
  </div>
  
  <div class="mb-3">
    <label for="bio" class="form-label">descreption</label>
    <input type="textarea"name="descreption " class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>
</div>

@endsection