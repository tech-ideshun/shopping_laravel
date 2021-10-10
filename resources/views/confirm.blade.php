@extends('customerLayout')

@section('content')
  <div class="access">
    <h1>CONTACT</h1>
  </div>

  {{ Form::open(['route' => 'shop.send']) }}
  <div class="container">
    <div>
      {{ Form::label('name', '名前') }}
      {{ $input['name'] }}
      {{ Form::hidden('name', $input['name']) }}
    </div>
    <div>
      {{ Form::label('email', 'メールアドレス') }}
      {{ $input['email'] }}
      {{ Form::hidden('email', $input['email']) }}
    </div>
    <div>
      {{ Form::label('tel', '電話番号') }}
      {{ $input['tel'] }}
      {{ Form::hidden('tel', $input['tel']) }}
    </div>
    <div>
      {{ Form::label('contact', 'お問い合わせ内容') }}
      {{ $input['contact'] }}
      {{ Form::hidden('contact', $input['contact']) }}
    </div>
    <div>
    <a href="{{ route('shop.contact') }}">お問い合わせに戻る</a>
      {{ Form::submit('送信') }}
    </div>
  </div>
@endsection