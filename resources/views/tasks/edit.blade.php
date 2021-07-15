@extends('layouts.app')
@section('content')

<h1>タスク登録</h1>

<form action = "{{route('tasks.update', $task->id)}}" method="post">
    @method('put')
    @csrf
    タイトル<br>
    <input type = "text" name = "title" value = "{{old('title')}}" required>
    <br>
    詳細<br>
    <textarea name = "detail" value = "{{old('detail')}}"></textarea>
    <br>
    期限<br>
    <input type = "datetime-local" name = 'dead_line' required value = "{{old('dead_line')}}">
    <br>
    <button>タスク登録</button>
</form>

<style>
button{
    margin-top: 15px;
}
</style>
@endsection
