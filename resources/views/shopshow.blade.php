@extends('customerLayout')

@section('content')
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
@endsection