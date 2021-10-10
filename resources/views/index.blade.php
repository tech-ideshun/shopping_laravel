<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
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

  <ul class="slider">
    <li><img src="{{ asset('img/pexels-anastasiya-lobanovskaya-1035685.jpg') }}" alt=""></li>
    <li><img src="{{ asset('img/pexels-andrea-piacquadio-837140.jpg') }}" alt=""></li>
    <li><img src="{{ asset('img/pexels-bess-hamiti-35188.jpg') }}" alt=""></li>
    <li><img src="{{ asset('img/pexels-freestocksorg-291762.jpg') }}" alt=""></li>
    <li><img src="{{ asset('img/pexels-george-shervashidze-1135531.jpg') }}" alt=""></li>
    <li><img src="{{ asset('img/pexels-godisable-jacob-871495.jpg') }}" alt=""></li>
    <li><img src="{{ asset('img/pexels-tembela-bohle-1884584.jpg') }}" alt=""></li>
  </ul>

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

  <div class="wrap">
    @foreach ($articles as $article)
      <div class="item">
        <a href="{{ route('shop.list', ['id' => $article->id]) }}">
        @foreach ($article->images as $image)
          <img src="{{ Storage::url($image->file_path) }}"/>
        @endforeach
          <h2>{{ $article->name }}</h2>
          <p>¥{{ $article->price }}</p></a>
      </div>
    @endforeach
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>