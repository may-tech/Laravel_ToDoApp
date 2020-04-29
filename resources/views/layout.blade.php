<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>May's ToDo App</title>
  @yield('styles')
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">May's ToDo App</a>
  </nav>
</header>
<main>
<!-- ページごとに変化する部分は @yield で穴埋め -->
  @yield('content')
</main>
@yield('scripts')
</body>
</html>