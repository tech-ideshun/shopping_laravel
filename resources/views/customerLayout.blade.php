<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Document</title>
</head>
<body>
  <header class="site-header">
    <div class="wrapper">
      <div class="shopImage">
        <a href="{{ route('shop.home') }}">
          <img src="{{ asset('img/shopimage.png') }}" alt="">
        </a>
      </div>
      <nav>
        <ul class="gnavi">
          <li class="curent">
            <a href="{{ route('shop.access') }}"><span>Access</span>アクセス</a>
          </li>
          <li>
            <a href=""><span>Company</span>会社概要</a>
          </li>
          <li>
            <a href="{{ route('shop.contact') }}"><span>Contact</span>お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <header class="section-header">
    <h1>Let's Shopping</h1>
  <div class="short">
      <ul>
        <li>
          <a href="{{ route('shop.home') }}">ALL</a>
        </li>
        <li>
          <a href="{{ route('item.list').'?fashion=1' }}">OUTER</a>
        </li>
        <li>
          <a href="{{ route('item.list').'?fashion=2' }}">TOPS</a>
        </li>
        <li>
          <a href="{{ route('item.list').'?fashion=3' }}">BOTTOMS</a>
        </li>
        <li>
          <a href="{{ route('item.list').'?fashion=4' }}">ACCESORIES</a>
        </li>
      </ul>
    </div>
  </header>
  @yield('content')
</body>
</html>