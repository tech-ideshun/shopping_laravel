@extends('customerLayout')

@section('content')
  <div class="access">
    <h1>CONTACT</h1>
  </div>
  @if (count($errors) > 0)
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{ Form::open(['route' => 'shop.confirm']) }}
  <div class="container">
    <div>
      {{ Form::label('name', '名前') }}<span>必須</span>
      {{ Form::text('name', null, ["placeholder" => "山田 太郎"]) }}
    </div>
    <div>
      {{ Form::label('email', 'メールアドレス') }}<span>必須</span>
      {{ Form::email('email', null, ["placeholder" => "example@email.com"]) }}
    </div>
    <div>
      {{ Form::label('tel', '電話番号') }}<span>必須</span>
      {{ Form::input('tel', 'tel', null, ["placeholder" => "08012345678"]) }}
    </div>
    <div>
      {{ Form::label('contact', 'お問い合わせ内容') }}<span>必須</span>
      {{ Form::textarea('contact', null, ["placeholder" => "お問い合わせ内容を入力して下さい。"]) }}
    </div>
    <div>
      {{ Form::submit('確認') }}
    </div>
  </div>
@endsection