<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ログインフォーム</title>
  <script src="{{asset('js/app.js')}}" defer></script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/signin.css')}}">

</head>
<body>

<form class="form-signin" method="POST" action="{{route('login')}}">
  @csrf
  <h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
          <ul>
            <li>{{ $error }}</li>
          </ul>
      @endforeach

      @if(session('login_error'))
      <div class="alert alert-danger">
        {{session('login_error')}}
      </div>
    @endif
    </div>
@endif
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address"  autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password">
  <div class="checkbox mb-3">
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
  {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017-{{ site.time | date: "%Y" }}</p> --}}
</form>

</body>
</html>