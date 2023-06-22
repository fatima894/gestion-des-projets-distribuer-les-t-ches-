<?php
namespace  App\Notifications;
namespace App\Http\Controllers;
use App\Notifications\NewTaskNotification;
use App\Models\Task;
use App\Models\Status;
use App\Models\Priority;
use App\Models\Projet;
use App\Models\User;

use Illuminate\Http\Request;
use Auth ;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware('auth');
        }
   
   

public function index($id_prj)
{
    $project = Projet::findOrFail($id_prj);
    $priorities=Priority::all();
    $statuses=Status::all();
    $tasks=Task::all();
    // Other operations...

    return view('tasks.index', compact('id_prj', 'project','tasks','statuses','priorities'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create($id_prj)
    {  $developers=User::all();
        $statuses=Status::all();
         $priorities=Priority::all();
         $pj=Projet::find($id_prj);

       return view('tasks.create',compact('developers','statuses', 'priorities','pj'))->with('id_prj',$id_prj);
    }

    
    public function store(Request $request, $id_prj)
{
    $this->validate($request, [
        'title' => 'required','date_delivre' => 'required',
        'descreption' => 'required',
        'user_id' => 'required',
        'status_id' => 'required',
        
    ]);

    $task = new Task;
    
    $task->project_id = $id_prj;
    $task->date_delivre=$request->input('date_delivre');
    $task->title = $request->input('title');
    $task->descreption = $request->input('descreption');
    $task->user_id = $request->input('user_id');
    $task->status_id = $request->input('status_id');
    $task->priority_id =  $request->input('priority_id');
    $task->save();
    $user = User::find($request->input('user_id'));
    $user->notify(new NewTaskNotification($task->id));

    return redirect()->back();
}

    public function show($id)
    {
        $task=Task::find($id);
       return view('tasks.show')->with('task',$task);    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {  $developers=User::all();
        $statuses=Status::all();
         $priorities=Priority::all();
        $task=Task::find($id);
       return view('tasks.edit',compact('developers','statuses','priorities'))->with('task',$task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $task=Task::find($id);
        $this->validate($request,[
            'title'=>"required",
            'descreption'=>"required",
            'user_id'=>"required",
            'date_delivre'=>"required"
        ]);
        $task->title=$request->title;
        $task->user_id=$request->user_id;
        $task->descreption=$request->descreption;
        $task->date_delivre=$request->date_delivre;
        $task->status_id=$request->status_id;
      
        $task->save();
        return redirect()->back();
    }
    public function update_status(Request $request, $id)
    {
        $task=Task::find($id);
        $this->validate($request,[
            'status_id'=>'required'
        ]);
        $task->status_id=$request->status_id;
        $task->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::find($id);
    
        if (isset($task)) {
            $task->delete();
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Task not found');
        }
    }
}
