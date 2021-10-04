@extends('customerLayout')

@section('content')
<div class="wrap">
    @foreach ($articles as $article)
        <div class="item">
            <a href="{{ route('shop.list', ['id' => $article->id]) }}">
            @foreach ($article->images as $image)
                <img src="{{ Storage::url($image->file_path) }}"/>
            @endforeach
            <p>{{ $article->name }}</p>
            <p>¥{{ $article->price }}</p></a>
        </div>
    @endforeach
</div>
@endsection
