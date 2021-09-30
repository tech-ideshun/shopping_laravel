<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Document</title>
</head>
<body>
  <header>
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

  <div>
    @foreach ($articles as $article)
    <a href="{{ route('shop.list', ['id' => $article->id]) }}">
    @foreach ($article->images as $image)
    <img src="{{ Storage::url($image->file_path) }}"/>
    @endforeach
      <p>{{ $article->name }}</p>
      <p>{{ $article->price }}</p></a>
    @endforeach
  </div>
</body>
</html>