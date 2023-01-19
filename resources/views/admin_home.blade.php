<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>ホーム画面</title>
</head>
<body>
  <div class="container">
<div class="mt-5">
  @if(session('login_success'))
    <div class="alert alert-success">
      {{session('login_success')}}
    </div>
  @endif
<h3>プロフィール</h3>
<ul></ul>
  <li>名前:{{Auth::admin()->name}}</li>
  <li>メールアドレス:{{Auth::admin()->email}}</li>
  <li></li>
</ul>
<form action="{{route('logout')}}" method="POST">
  @csrf
  <button class="btn btn-danger">ログアウト</button>
</form>
</div>
  </div>
</body>
</html>