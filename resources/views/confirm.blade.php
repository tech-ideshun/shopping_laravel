@extends('customerLayout')

@section('content')
  <div class="access">
    <h1>CONTACT</h1>
  </div>

  {{ Form::open(['route' => 'shop.send']) }}
  <div class="container">
    <table class="formtable">
      <tr>
        <th>{{ Form::label('name', '名前') }}</th>
        <td>{{ $input['name'] }}</td>
        {{ Form::hidden('name', $input['name']) }}
      </tr>
      <tr>
        <th>{{ Form::label('email', 'メールアドレス') }}</th>
        <td>{{ $input['email'] }}</td>
        {{ Form::hidden('email', $input['email']) }}
      </tr>
      <tr>
        <th>{{ Form::label('tel', '電話番号') }}</th>
        <td>{{ $input['tel'] }}</td>
        {{ Form::hidden('tel', $input['tel']) }}
      </tr>
      <tr>
        <th>{{ Form::label('contact', 'お問い合わせ内容') }}</th>
        <td>{!! nl2br(e($input['contact'])) !!}</td>
        {{ Form::hidden('contact', $input['contact']) }}
      </tr>
    </table>
    <div class="contact-btn">
      <!-- <button type="submit" name="action" value="back">入力内容修正</button> -->
      {{ Form::button(' 入力内容修正 ', ['type' => 'submit', 'name' => 'action', 'value' => 'back']) }}
      <!-- <button type="submit" name="action" value="submit">送信する</button> -->
      {{ Form::button(' 送信する ', ['type' => 'submit', 'name' => 'action', 'value' => 'submit']) }}
    </div>
  </div>
  {{ Form::close() }}
@endsection