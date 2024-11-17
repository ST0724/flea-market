<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>coachtechフリマ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        <img class="header__logo--image" src="{{ asset('storage/logo.svg') }}" alt="画像">
      </a>

      @if(Auth::check())
        <form class="form" action="/logout" method="post">
        @csrf
          <button>ログアウト</button>
        </form>
      @endif
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>