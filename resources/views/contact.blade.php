@extends('customerLayout')

@section('content')
  <div class="access">
    <h1>CONTACT</h1>
  </div>
  @if (count($errors) > 0)
    <div class="errors">
      <ul>
        @foreach ($errors->all() as $error)
          <li id="error">{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{ Form::open(['route' => 'shop.confirm']) }}
  <div class="container">
    <table class="formtable">
      <tr>
        <th>{{ Form::label('name', '名前') }}<span>必須</span></th>
        <td>{{ Form::text('name', null, ["placeholder" => "山田 太郎", "size" => "20", "class" => "wide"]) }}</td>
      </tr>
      <tr>
        <th>{{ Form::label('email', 'メールアドレス') }}<span>必須</span></th>
        <td>{{ Form::email('email', null, ["placeholder" => "example@email.com", "size" => "20", "class" => "wide"]) }}</td>
      </tr>
      <tr>
        <th>{{ Form::label('tel', '電話番号') }}<span>必須</span></th>
        <td>{{ Form::input('tel', 'tel', null, ["placeholder" => "08012345678", "size" => "20", "class" => "wide"]) }}</td>
      </tr>
      <tr>
        <th>{{ Form::label('contact', 'お問い合わせ内容') }}<span>必須</span></th>
        <td>{{ Form::textarea('contact', null, ["placeholder" => "お問い合わせ内容を入力して下さい。"]) }}</td>
      </tr>
    </table>

    <div class="box_con02">
        
        
        <div class="con_pri">
            <div class="box_pri">
                <div class="box_tori">
                    <h4>プライバシー</h4>
                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                </div>
                <div class="box_num">
                    <h4>プライバシー</h4>
                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                </div>
                <div class="box_num">
                    <h4>プライバシー</h4>
                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                </div>
                <div class="box_num">
                    <h4>プライバシー</h4>
                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                </div>
            </div>
        </div>
        <div class="box_check">
            <label>
                <input type="checkbox" name="accept" value="" aria-invalid="false" class="agree" required="required" id="agree"><span class="check">プライバシーポリシーに同意する</span>
            </label>
        </div>
    </div>

    <div class="contact-btn">
      {{ Form::button(' 入力内容を確認する ', ['type' => 'submit', 'name' => 'action', 'id' => 'submit', 'value' => 'submit', 'class' => 'disabled-btn', 'readonly' => 'readonly']) }}
    </div>
  </div>
  {{ Form::close() }}



@endsection