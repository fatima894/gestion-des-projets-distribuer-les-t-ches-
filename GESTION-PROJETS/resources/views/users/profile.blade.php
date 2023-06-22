@extends('layouts.app')
@section('content')

<div class='container' >

    <form action="{{route('profile.update')}}" method="POST">
        @csrf
        @method('PUT')
       <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" name='name' value="{{$user->name}}"class="form-control"  >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="text" name='email' value="{{$user->email}}"class="form-control"  >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">password</label>
    <input type="password" name='password' class="form-control"  >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">confirmation password</label>
    <input type="password" name='c_password' class="form-control"  >
  </div>
  <div class="mb-3">
    <label for="grade" class="form-label">grade</label>
    <input type="text" class="form-control"  value="{{$user->profile->grade}}"name="grade" >
  </div>
  <div class="mb-3">
    <label for="gender"  class="form-label">gender</label>
    <select   class="form-control" name="gender" >
        
       <option value="male">male</option>
        <option value="female">female</option>
       
    </select>
  </div>
  <div class="mb-3">
    <label for="bio" class="form-label">BIO</label>
    <input type="textarea" value="{{$user->profile->bio}}" name="bio" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>

@endsection