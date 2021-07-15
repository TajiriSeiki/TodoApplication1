@if (Auth::check())
    <div class='container header shadow position-fixed'>
    <div class='row'>
        <div class = 'col-6 text-left'>
            <h1>KYOU</h1>
        </div>
        <div class = 'col-2 border text-center navigation'>
        <a href = "{{route('home')}}">マイページ</a>
        </div>
        <div class = 'col-2 border text-center navigation'>
        <a href="{{route('belongstogroups.index')}}">参加グループ一覧</a>
        </div>
        <div class = 'col-2 border text-center navigation'>
        <a href = "" onclick = "logout()">ログアウト</a>
        <form id = "logout-form" action = "{{route('logout')}}" method = "post">
            @csrf
        </form>
        <script type = "text/javascript">
            function logout(){
                event.preventDefault();
                if(window.confirm('ログアウトしますか？')){
                    document.getElementById('logout-form').submit();
                }
            }
        </script>
        </div>
    </div>
</div>
@endif

<style>
.header{
    height:50px;
    margin:0px;
    /* background-color:black;
    color:#ffffff; */

}

.navigation{
    padding-top: 10px;
}
li{
    margin-right:15px;
    list-style: none;
}
a {
text-decoration: none;
color: black;
}
</style>
