<?php

namespace App\Http\Controllers;

use App\BelongsToGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelongsToGroupController extends Controller
{
    public function store(Request $request){
        \Auth::user()->belongs_to_groups()->attach($request->group_id);
        return back();
    }

    public function destroy(Request $request){
        \Auth::user()->belongs_to_groups()->detach($request->group_id);
        return back();
    }

    public function index(){
        $groups = \Auth::user()->belongs_to_groups()->orderBy('created_at', 'desc')->paginate(20);
        return view('belongstogroups.index',['groups'=>$groups]);
    }

    public function show(Request $request)
    {
        // $belongstogroup = \Auth::user();
        //グループに属するユーザの情報を取得
        $g_id = $request->g_id;
        $members = DB::table('belongs_to_groups')->where('group_id','=',$request->g_id)->get();
        //全ユーザを取得
        $users = DB::table('users')->get();
        //全タスクを取得
        $tasks = DB::table('tasks')->get();
        //dd($tasks);
        return view('belongstogroups.show',[
            'users'=>$users,
            'members'=>$members,
            'tasks'=>$tasks,
            'g_id'=>$g_id,
        ]);
         // return view('belongstogroups.show', [
        //     'belongstogroups'=>$belongstogroups,
        //     'tasks'=>$tasks,
        // ]);
    }
    public function create(){
        return view('belongstogroups.create');
    }

    public function enter(Request $request)
    {
        //フォームで入力したグループ名とパスワードと一致したグループに参加
        $group = DB::table('groups')
        ->where('name','=',$request->group_name)
        ->where('password', '=', $request->password)
        ->get();
        //ログイン中のユーザーを上で取得したグループに追加
        $id = \Auth::user()->id;
        $users = DB::table('users')->get();
        if(empty($group)!=true){
            // $belongstogroup = $request->user()->belongs_to_groups()->create(
            //     ['user_id'=>$id,
            //     'group_id'=>$request->group_id]);
                $belongstogroup = new \App\BelongsToGroup();
                $belongstogroup->user_id = $id;
                $belongstogroup->group_id = $group->pluck('id')[0];
                $belongstogroup->save();
        }
        else{
            return view('belongstogroups.create');
        }
        return redirect(route('home'));
    }
}
