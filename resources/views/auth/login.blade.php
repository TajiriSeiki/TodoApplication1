@extends('layouts.app')
@section('content')

<div class = 'container'>
    <div class = 'row'>
        <div class = 'col-9'>
            <h1>
                KYOU
            </h1>
            <p>身近な人が普段何をしているか知っていますか？<br>
            あなたの頑張りをもっと周囲の人に知ってほしくないですか？<br>
            KYOUは家族や友人とその日行うことを共有することで、身近な人とより親密になるためのサービスです。</p>
            <!-- <a href="{{ url('/') }}"><img src="{{ asset('/assets/images/work.jfif') }}" alt="ロゴ"></a>
            <a href="{{ url('/') }}"><img src="{{ asset('/assets/images/run.jfif') }}" alt="ロゴ"></a> -->
            <a href="{{ url('/') }}"><img src="{{ asset('/assets/images/loginimg.png') }}" alt="ロゴ"></a>
        </div>
        <div class = 'col-3 shadow login'>
    <h1>ログイン</h1>
@include('commons/flash')
<form action="{{route('login')}} " method="post">
    @csrf
    <p>
        <label>メールアドレス<br>
        <input type="email" name="email" value="{{old('email')}}">
    </label>
</p>
<p>
    <label>パスワード<br>
        <input type="password" name="password" value="">
    </label>
</p>
<p>
    <button type="submit">ログイン</button>
</p>
<p>または</p>
<p>
<a href="{{route('register')}}">会員登録はこちら</a>

</p>
</form>
</div>
</div>
</div>
@endsection
<style>
    .login{
        height:600px;
    }
    a img {
        height:450px;
        opacity: 0.5;
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%);
    }
</style>
