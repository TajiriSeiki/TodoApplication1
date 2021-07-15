@extends('layouts.app')
@section('content')
@foreach($belongstogroup as $value)
{{$value}}

@endforeach

user_id:
{{$belongstogroup->user_id}}
<br>
group_id:
{{$belongstogroup->group_id}}

<br>
<br>

@endsection
