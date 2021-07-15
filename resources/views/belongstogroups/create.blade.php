@extends('layouts.app')
@section('content')

<h1 class = 'group_add'>グループ参加</h1>
<p>参加したいグループの名前とパスワードを入力してください。</p>

<form action = "{{route('belongstogroups.enter')}}" method = "post">
@csrf
グループ名<br>
<input type = 'text' name = 'group_name' value = "{{old('group_name')}}" required><br>
パスワード<br>
<input type ='password' name = 'password' required><br>
<br>
<button type = 'submit'>グループに参加</button>

</form>
@endsection
<style>
    .group_add{
        padding-top:50px;
    }
</style>
