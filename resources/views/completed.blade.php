@extends('customerLayout')

@section('content')
  <div class="access">
    <h1>CONTACT</h1>
  </div>

  <div>
    <h1>お問い合わせ 送信完了</h1>
    <p>
    お問い合わせありがとうございました。<br>
    内容を確認のうえ、回答させて頂きます。<br>
    しばらくお待ちください。
  </p>
  <a href="{{ route('shop.contact') }}">お問い合わせに戻る</a>
  </div>
@endsection