@extends('layouts.app')
@section('content')


<div class='container'>
<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-dark">
                                        <strong class="card-title text-light">CREATE TASK FOR PROJECT : {{$pj->title}}</strong>
                                    </div>
                                    <div class="card-body text-white bg-danger">
                                        <p class="card-text text-light"> ABOUT : {{$pj->descreption}}
                                        </p>
                                    </div>
                                </div>
                            </div>
    <form action="{{ route('tasks.store', ['id_prj' => $id_prj]) }}" method="POST">
        @csrf
        @method('POST')
       <div class="mb-3" class="card-header">
        <label class="form-label">title</label>
        <input type="text" name='title' class="form-control">
      </div>
      
      <div class="mb-3" class="card-body card-block">
        <label class="form-label">descreption</label>
        <input type="textarea" name="descreption" class="form-control">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">developer</label>
        <select name="user_id" class="form-control"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">
            @foreach ($developers as $developer)
                <option value="{{ $developer->id }}">{{ $developer->name }}</option>
            @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">priority </label>
        <select name="priority_id" class="form-control">
            @foreach ($priorities as $priority)
                <option value="{{ $priority->id }}">{{ $priority->title }}</option>
            @endforeach
        </select>
      </div>
      <!--<div class="mb-3">
        <label class="form-label">status</label>
        <select name="status_id" class="form-control">
            @foreach ($statuses as $status)
                <option value="{{ $status->id }}">{{ $status->title }}</option>
            @endforeach
        </select>
      </div>-->
      <div class="mb-3">
  <label class="form-label">status</label>
  <select name="status_id" class="form-control">
    @foreach ($statuses as $status)
      <option value="{{ $status->id }}" {{ $status->id == "2" ? 'selected' : '' }}>
        {{ $status->title }}
      </option>
    @endforeach
  </select>
</div>

      <div class="mb-3">
        <label class="form-label">Date delivred</label>
        <input type="date" name="date_delivre" id="">
      </div>
      <button type="submit" class="btn btn-success">save task </button>
    </form>
</div>
<br>
<div class="container">
  <a href="{{ route('tasks', ['id_prj' => $id_prj]) }}">
     <button class="btn btn-warning btn-sm">Show All Tasks</button>
  </a>
</div>

@endsection
