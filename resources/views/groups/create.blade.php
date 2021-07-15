@extends('layouts.app')
@section('content')

<h1 class = 'group_form'>グループ作成</h1>

<form action = "{{route('groups.store')}}" method="post">
    @csrf
    グループ名<br>
    <input type = "text" name = "name" required>
    <br>
    詳細<br>
    <textarea name = "detail"></textarea>
    <br>
    パスワード<br>
    <input type = "password" name = "password" required>
    <br>
    <button>グループ作成</button>
</form>

@endsection
<style>
    .group_form{
        padding-top:50px;
    }
</style>
