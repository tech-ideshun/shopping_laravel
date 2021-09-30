@extends('layout')

@section('content')
<h1>{{ $product->name }}を編集</h1>
{{ Form::model($product, ['route' => ['product.update', $product->id], 'files' => true]) }}
@foreach ($uploads as $upload)
<div class="form-group">
<div style="width: 200px;">
    <img id="default" src="{{ Storage::url($upload->file_path) }}" style="width: 100%;"/>
    <img id="preview" width="200px">
</div>
    {{ Form::label('image', '写真：') }}
    {{ Form::file('image') }}
</div>
@endforeach
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
    {{ Form::submit('更新する') }}
</div>
{{ Form::close() }}
{{ Form::open(['method' => 'delete', 'route' => ['product.destroy', $product->id]]) }}
    {{ Form::submit('削除', ['class' => 'btn btn-outline-danger']) }}
{{ Form::close() }}
<div>
    <a href="{{ route('product.list') }}">一覧に戻る</a>
</div>
@endsection