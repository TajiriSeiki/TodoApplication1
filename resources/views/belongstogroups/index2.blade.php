@extends('layouts.app')
@section('content')
<h1>グループページ</h1></h1>

@foreach($groups as $group)
@if(\Auth::user()->isBelong($group->id))

    <p>あああ</p>
    <form action="{{route('belongstogroups.destroy')}}" method="post">
            @csrf
            @method('delete')
                <input type="hidden" name="group_id" value="{{$group->id}}">
                    <button type="submit">お気に入り解除</button>
                </form>
                @else
                <form action="{{route('likes.post')}}" method="post">
                    @csrf
                    <input type="hidden" name="group_id" value="{{$group->id}}">
                        <button type="submit">お気に入り登録</button>
                    </form>
                    @endif
@endforeach

@endsection
