@extends('layout')

@section('content')
<h1>新規投稿ページ</h1>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{{ Form::open(['route' => 'shopping.save', 'files' => true]) }}
<div class="form-group">
    <img id="preview" width="200px">
    {{ Form::label('image', '写真：') }}
    {{ Form::file('image') }}
</div>

<div class="form-group">
    {{ Form::label('name', '商品名：') }}
    {{ Form::text('name', null) }}
</div>
<div class="form-group">
    {{ Form::label('price', 'price：') }}
    {{ Form::text('price', null) }}
</div>
<div class="form-group">
    {{ Form::label('introduction', '説明：') }}
    {{ Form::textarea('introduction', null) }}
</div>
<div class="form-group">
    {{ Form::label('category_id', 'カテゴリ：') }}
    {{ Form::select('category_id', $categories) }}
</div>
<div class="form-group">
    {{ Form::submit('投稿する') }}
</div>
{{ Form::close() }}
<div>
    <a href="{{ route('product.list') }}">一覧に戻る</a>
</div>
@endsection