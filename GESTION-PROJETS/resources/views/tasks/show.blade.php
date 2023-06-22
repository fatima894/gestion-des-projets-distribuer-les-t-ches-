@extends('layouts.app')
@section('content')



<div class="container">
    <h1 class="text-right">the task is :</h1>

    
    
   <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries  table-success table-striped" >
                                                <tbody>
                                                    <tr>
                                                        <td>Developper</td>
                                                        <td class="text-right">{{ $task->user->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Title</td>
                                                        <td class="text-right">${{ $task->title }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Descreption</td>
                                                        <td class="text-right">{{ $task->descreption }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td class="text-right">{{ $task->status->title }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Priority</td>
                                                        <td class="text-right">{{ $task->priority->title }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date de creation</td>
                                                        <td class="text-right">{{ $task->created_at }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date delivre</td>
                                                        <td class="text-right">{{ $task->date_delivre }}</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
<div  class="card-body">
    
    <a href="javascript:history.back()">
        <button data-target="#smallmodal" class="btn btn-danger">Go Back</button>
    </a>
</div>
</div>

@endsection
