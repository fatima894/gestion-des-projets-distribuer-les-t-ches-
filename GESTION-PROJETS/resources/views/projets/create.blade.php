
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
    <form action="{{route('projets.store')}}" method="POST">
        @csrf
        @method('POST')
       <div class="mb-3">
        <h1>im the create of projetc folder</h1>
        <label class="form-label">title</label>
        <input type="text" name='title' class="form-control">
      </div>
      
      <div class="mb-3">
        <label for="bio" class="form-label">descreption</label>
        <input type="textarea" name="descreption" class="form-control">
      </div>
      <button type="submit" class="btn btn-danger">save</button>
    </form>
</div>

@endsection
