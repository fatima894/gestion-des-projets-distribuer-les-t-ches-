<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;
class ProfileController extends Controller
{  public function __construct(){
    $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        $id=Auth::id();
        if ($user->profile==null){
            $profile=Profile::create([
                'grade'=>'employe',
                'gender'=>'male',
                'bio'=>'nothing',
                'user_id'=> $id
            ]);
        }
        return view('users.profile')->with('user',$user);//redirect to profile view to show information
    }

    
    public function update(Request $request)

    {
        $this->validate($request,[
            'grade'=>'required',
            'bio'=>'required',
            'gender'=>'required'
        ]);
        $user=Auth::user();
        $user->name=$request->name;
        $user->profile->gender=$request->gender;
        $user->profile->bio=$request->bio;
        $user->profile->grade=$request->grade;
        $user->save();
        $user->profile->save();
        //dd($request->all());
        if ($request->has('password')){
            $user->password=bcrypt($request->password);
            $user->save();
        }
        return view('users.profile')->with('user',$user);
    }

    
}
