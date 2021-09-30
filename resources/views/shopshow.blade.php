<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<header>
    <h1>Let's Shopping</h1>
  <div class="short">
        <ul>
            <li>
                <a href="{{ route('product.list') }}">ALL</a>
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
    @foreach ($uploads as $upload)
      <img src="{{ Storage::url($upload->file_path) }}">
    @endforeach
  </div>

  <div>
    <p>{{ $article->name }}</p>
    <p>¥{{ $article->price }}</p>
    <p>{{ $article->introduction }}</p>
  </div>
  

  

  <div>
    <a href="{{ route('shop.home') }}">戻る</a>
  </div>
</body>
</html>