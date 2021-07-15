@extends('layouts.app')

@section('content')

<div class = 'container mainindex'>
    <div class = 'row'>
@foreach($members as $member)
    <div class = 'col-sm task_title '>
    @foreach($users as $user)
        @if($member->user_id == $user->id)
        <h5>{{$user->name}}</h5>
        @endif
    @endforeach
    @foreach($tasks as $task)
        @if($member->user_id == $task->user_id)
            <div class = 'task_title shadow'>
            <h6>{{$task->title}}</h6>
            <p>期限：{{$task->dead_line}}</p>
            @if($task->whether_done == 1)
                <p>達成済み</p>
            @else
                <p>未達成</p>
                @endif
        </div>

        @endif
    @endforeach
    </div>
@endforeach
    </div>
</div>
@endsection
<style>
    .task_title{
        height:100px;
        width:300px;
        /* display: flex;
        justify-content: center; */
        align-items: center;
        border-radius:0% / 0%;
        /* background-color: #ffefd5; */
        margin-top: 20px;
    }
    .mainindex{
    padding-top:50px;
}
</style>
