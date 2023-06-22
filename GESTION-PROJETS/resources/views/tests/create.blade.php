@extends('layouts.app')
@section('content')

<div class='container'>
    
    <form action="{{route('tests.store')}}" method="POST">
        @csrf
        @method('POST')
       <div class="mb-3">
        <h1>im the create of tests folder
            
        </h1>
    <label lass="form-label">first name</label>
    <input type="text" name='first_name' class="form-control"  >
  </div>
  
  <div class="mb-3">
    <label for="bio" class="form-label">last name</label>
    <input type="textarea"  name="last_name" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="bio" class="form-label">age</label>
    <input type="textarea"  name="age" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="bio" class="form-label">gender</label>
    <input type="textarea"  name="gender" class="form-control" >
  </div>
  <button type="submit" class="btn btn-danger"> {{ __('save') }}</button>
</form>
</div>

@endsection