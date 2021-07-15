@extends('layouts.app')
@section('content')
<div class = 'container blg_index'>
<h1 class = 'blg_title'>グループページ</h1>
<div class = 'row'>
@foreach($groups as $group)
<!-- $groupには、ログイン中のユーザと紐づくグループの情報が格納 -->

    <div class = 'col-3 shadow task'>
    {{$group->name}}
        <form action = "{{route('belongstogroups.show',$group->id)}}" method = "get">
            <input type = 'hidden' name = 'g_id' value = '{{$group->id}}'>
            <button type = "submit" class = 'btn btn-outline-primary justify-content-end'>メンバーのタスクを見る</button>
        </form>
        <form action="{{route('belongstogroups.destroy')}}" method="post">
                @csrf
                @method('delete')
                    <input type="hidden" name="group_id" value="{{$group->id}}">
                        <button type="submit" class = 'btn btn-primary justify-content-end'>退会</button>
                    </form>
    </div>
@endforeach
</div>
</div>
@endsection
<style>
    .blg_index{
        padding-top: 50px;
    }
    .task{
        margin:10px;
    }
</style>
