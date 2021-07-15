<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- .envからAPP_NAMEを取得 -->
        <title>{{config('app.name')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- asset(cssファイルへのパス)とすることでpublicフォルダのリソースを読み込める -->
        <link rel="stylesheet" href ={{asset("css/main.css")}}>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="container">
                <!-- <a class="brand" href="/">{{ config('app.name')}}</a> -->
                <!-- header部のnavを他ファイルから読込み -->
                @include('commons/nav')
            </div>
        </header>
        <main>
            <div class = "container">
                @yield('content')
            </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
