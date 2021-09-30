@extends('layout')

@section('content')
<body>
  {{ Form::open(['method' => 'get', 'route' => 'shopping.new']) }}
    {{ Form::submit('新規投稿', ['class' => 'btn btn-outline-primary']) }}
  {{ Form::close() }}
  <p><a href="{{ route('shopping.new') }}">新規投稿</a></p>
  <table class='table table-striped table-hover'>
    <tr>
      <th>商品名</th><th>Price</th><th>カテゴリー</th>
    </tr>

    @foreach ($products as $product)    
    <tr>
      <td>
        <a href="{{ route('product.detail', ['id' => $product->id]) }}">
          {{ $product->name }}
        </a>
      </td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->category->name }}</td>
    </tr>
    @endforeach
  </table>
@endsection