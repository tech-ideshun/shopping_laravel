@extends('layout')

@section('content')
<!-- フラッシュメッセージ -->
@if (session('flash_message'))
    <div class="flash_message bg-success text-center py-3 my-0">
        {{ session('flash_message') }}
    </div>
@endif
<!--  -->
<div style="width: 18rem; float:left; margin:16px;">
    @foreach ($uploads as $upload)
    <img src="{{ Storage::url($upload->file_path) }}" style="width: 100%;"/>
    <p>{{ $upload->file_name }}</p>
    @endforeach
</div>
<div>
    <p>{{ $product->name }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->category->name }}</p>
    <p>{{ $product->introduction }}</p>
</div>
<div>
    <a href="{{ route('product.edit', ['id' => $product->id]) }}">編集</a>
</div>
{{ Form::open(['method' => 'get', 'route' => ['product.edit', $product->id]]) }}
    {{ Form::submit('編集', ['class' => 'btn btn-outline-primary']) }}
{{ Form::close() }}
<div>
    <a href="{{ route('product.list') }}">一覧に戻る</a>
</div>
@endsection