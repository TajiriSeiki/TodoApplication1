@extends('layouts.app')
@section('content')
<h1 class = 'task_show'> 書籍情報</h1>
<p>
<!-- 投稿者以外には編集、削除のボタンが見えない -->

<!-- 本のユーザーIDと現在のログイン者のIDが同じなら -->
@if($task ->user_id == Auth::id())
<a href = "{{route('tasks.edit',$task)}}" > 編集する</a>
|
<a href="{{route('tasks.destroy',$task)}}" onclick="deleteTask()">削除する</a>
<form action = "{{route('tasks.destroy',$task)}}" method = "post" id = "delete-form" > 
@csrf
@method('delete')
</form>

<script type="text/javascript ">
 function deleteTask() {
    event.preventDefault();
    if (window.confirm('本当に削除しますか')) {
        document
            .getElementById('delete-form')
            .submit();
    }
}
</script>
<!-- ユーザーと投稿者が違う場合 -->
@else

@if(\Auth::user() -> isLike($task ->id))
    <form action="{{route('likes.destroy')}}" method="post">
            @csrf
            @method('delete')
                <input type="hidden" name="task_id" value="{{$task->id}}">
                    <button type="submit">お気に入り解除</button>
                </form>
                @else
                <form action="{{route('likes.post')}}" method="post">
                    @csrf
                    <input type="hidden" name="task_id" value="{{$task->id}}">
                        <button type="submit">お気に入り登録</button>
                    </form>
                    @endif @endif
                </p>
                <dl>
                    <dt>投稿者</dt>
                    <dd>{{$task->user->name}}</dd>
                    <dt>タイトル</dt>
                    <dd>{{$task->title}}</dd>
                    <dt>詳細</dt>
                    <dd>{!!nl2br(e($task ->detail))!!}</dd>
                    <dt>期限</dt>
                    <dd>{{$task->dead_line}}</dd>
                </dl>
                @endsection
<style>
.task_show{
        
    padding-top:50px;
        }
</style>
