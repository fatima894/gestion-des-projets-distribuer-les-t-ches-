<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Task;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProjetController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
    }
    public function search(Request $request){
        $output='';
      $projet=Projet::where('title','Like', '%'.$request->search.'%')
      ->orWhere('id','Like', '%'.$request->search.'%')->get(); 
      foreach($projet as $pj)
      {
        $output.= ' <tr>
        <td>
        '.$pj->title.'
        </td>
        </tr>';
      }
      return response($outout);
    }
    public function index()
    {
        $projects = Projet::all();
        $tasks = Task::all();
        return view('projets.index')->with(['projects' => $projects, 'tasks' => $tasks]);
    }
    

    
    public function create()
    {
        return view('projets.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'descreption' => 'required'
        ]);
    
        $project = new Projet;
        $project->title = $request->title;
        $project->descreption = $request->descreption;
        $project->user_id = Auth::user()->id; // Remplit le user_id avec l'ID de l'utilisateur connecté
        $project->save();
    
        return redirect()->back();
    }
    public function show($id)
    {
        $projet=Projet::find($id);
        return view('projets.show')->with('projet',$projet);
    }

    public function edit($id)
    {
        // i meake research for th project who has this id 
        $projet=Projet::find($id);
       return view('projets.edit')->with('projet',$projet);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'descreption' => 'required'
        ]);
    
        $projet=Projet::find($id);
        $projet->title = $request->title;
        $projet->descreption = $request->descreption;
        //dd($request->all());
        $projet->save();
    
        return redirect()->back();
    }
    public function destroy($id)
    {
        $projet=Projet::find($id);
        $projet->delete();
        return redirect()->back();
    }
   
}
