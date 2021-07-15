@extends('layouts.app')
@section('content')
<h1 class = "task_form">タスク登録</h1>
<div class="container ">
    <div class="panel panel-default">
    <div class="panel-body">
    <form action = "{{route('tasks.store')}}" method="post">
    @csrf
    タイトル<br>
    <div class = 'form-group'>
    <input type = "text" name = "title" required>
    <br>
    </div>
    <div class = 'form-group'>
    詳細<br>
    <textarea name = "detail"></textarea>
    <br>
    </div>
    <div class = 'form-group'>
    期限<br>
    <input type = "datetime-local" name = 'dead_line' required>
</div>
<div class = 'form-group'>
    <button>タスク登録</button>
</div>
</form>

</div>
      </div>
    </div>

@endsection
<style>
    .task_form{
        padding-top:50px;
    }
</style>
