<?php

namespace App\Http\Controllers;
use App\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $tasks = \Auth::user()->tasks()->orderBy('dead_line','asc')->paginate(10);
        // $tasks = DB::table('tasks')
        // ->where('name','=',$request->group_name)
        // ->where('password', '=', $request->password)
        // ->get();
        return view('home/index', ['tasks' => $tasks]);
    }


    public function button(Request $request)
    {
        $whether_done = DB::table('tasks')->where('id',$request->button_id)->pluck('whether_done');
        //dd($whether_done,0);
        if($whether_done[0] == '0'){
            //dd($whether_done);
        $task = DB::table('tasks')->where('id','=',$request->button_id)->update(['whether_done' => 1]);
        }
        elseif($whether_done[0] == '1'){
            //dd('sss');
            $task = DB::table('tasks')->where('id','=',$request->button_id)->update(['whether_done' => 0]);
        }
        return redirect()->route('home');
    }
}
