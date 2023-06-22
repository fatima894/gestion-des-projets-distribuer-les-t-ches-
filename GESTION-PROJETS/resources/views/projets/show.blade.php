@extends('layouts.app')
@section('content')



<div class="container">
 
    <h1>this projet is </h1>

    <table class="table">
        <thead>
            <tr>  
                <th scope="col">name_user</th>
                <th scope="col">title</th>
                <th scope="col">descreption</th>   
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$projet->user->name}}</td>
                <td>{{$projet->title}}</td>
                <td>{{$projet->descreption}}</td>
               
                
            </tr>
        </tbody>
    </table>
</div>


<div class="container">
@if(auth()->user()->name == 'abdelah')
<a  class='btn btn-primary 'href="{{route('tasks.create',['id_prj' =>$projet->id])}}"> create task </a>
@endif
<br><br>
<div class="container">
        <a href="{{ route('projets') }}"><button class='btn btn-primary'> All projets </button></a>
    </div>
    <br><br>
        <a href="javascript:history.back()">
            <button class="btn btn-success">Go Back</button>
        </a>
       
    </div>


@endsection
