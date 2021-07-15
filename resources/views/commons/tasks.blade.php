<div class = 'container '>
<div class = 'row d-flex align-items-center justify-content-center'>
@foreach($tasks as $task)
    <!-- $task->user->nameがnullでもそのまま通す(どこかにミスがあるはず。) -->

    <div class = "task_title shadow">
    @if($task->user_id == Auth::id())
    <a href="{{route('tasks.show',$task->id)}}">
        <h4>{{$task->title}}</h4>
    </a>
    <div >
    <p>期限：{{$task->dead_line}}</p>
    </div>
    <form action = "{{route('home.button')}}" method = 'post'>
    @csrf
        <input type = 'hidden' name = 'button_id' value = '{{$task->id}}'>
        @if($task->whether_done == 0)
        <button class = 'btn btn-outline-primary justify-content-end' type = 'submit'>完了へ変更</button>
        @endif
        @if($task->whether_done == 1)
        <button class = 'btn btn-primary justify-content-end' type = 'submit'>未完了へ変更</button>
        @endif
        </form>
    @else
    {{$task->user->name}}
            <a href="{{route('tasks.show',$task->id)}}">
            <h4>{{$task->title}}</h4>
            </a>
            <br>
            <p>期限：{{$task->dead_line}}</p>
    @endif
    </div>

@endforeach
</div>
</div>
{{$tasks->links()}}
<style>
    .task_title{
        height:150px;
        width:350px;
        /* display: flex;
        justify-content: center; */
        align-items: center;
        border-radius:0% / 0%;
        /* background-color: #ffefd5; */
        margin-top: 20px;
        margin :10px
    }

</style>
