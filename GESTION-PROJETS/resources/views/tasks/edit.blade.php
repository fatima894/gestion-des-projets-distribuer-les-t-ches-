@extends('layouts.app')
@section('content')

<div class="container">
    @if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    

    <form action="{{ route('tasks.update', ['id' => $task->id]) }}"  method="POST">
        @csrf
        @method('PUT')
        <h1>Edit Task</h1>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" value="{{ $task->title }}" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="bio" class="form-label">Descreption</label>
            <input type="text" value="{{ $task->descreption }}" name="descreption" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Developer</label>
            <select name="user_id" class="form-control">
                @foreach ($developers as $developer)
                <option value="{{ $developer->id }}" {{ $developer->id == $task->user_id ? 'selected' : '' }}>
                    {{ $developer->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Priority</label>
            <select name="propriety_id" class="form-control">
                @foreach ($priorities as $property)
                <option value="{{ $property->id }}" {{ $property->id == $task->propriety_id ? 'selected' : '1' }}>
                    {{ $property->title }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status_id" class="form-control">
                @foreach ($statuses as $status)
                <option value="{{ $status->id }}" {{ $status->id == $task->status_id ? 'selected' : '' }}>
                    {{ $status->title }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Date Delivered</label>
            <input type="date" value="{{ $task->date_delivre }}" name="date_delivre" class="form-control">
        </div>
       
        <button  onclick="return confirm('Êtes-vous sûr de vouloir modifier cette tâche ?')" type="submit" class="btn btn-danger">Edit</button>
    </form>
</div>
<br>
<div class="container">
        
        <a href="javascript:history.back()">
            <button class="btn btn-danger">Go Back</button>
        </a>
       
    </div>
@endsection
