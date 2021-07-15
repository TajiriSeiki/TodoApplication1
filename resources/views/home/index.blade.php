@extends('layouts.app')
@section('content')


<div class='container mainindex'>
<h1 >マイページ</h1>
<div class='row'>
        <div class = 'col-4 border text-center mypage_menu'>
        <a href="{{route('tasks.create')}}">+タスク登録</a>
        </div>
        <div class = 'col-4 border text-center mypage_menu'>
        <a href="{{route('groups.create')}}">+グループ作成</a>
        </div>
        <div class = 'col-4 border text-center mypage_menu'>
        <a href="{{route('belongstogroups.create')}}">+グループ参加</a>
        </div>
    </div>
</div>
@include('commons/tasks')

@endsection
<style>

.mypage_menu{
    height:70px;
    font-size: 30px;
    padding-top: 12px;
}
.mainindex{
    padding-top:50px;
}
</style>
