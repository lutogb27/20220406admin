<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('complete') }}">
@extends('layouts.app')
@section('content')
<div class="panel-heading">お問い合わせ</div>
    <div class="panel-body">
        <p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>

        <table class="table">
            @csrf
            <th>名前</th>
            <td>{{$form->name}}</td>

            <th>フリガナ</th>
            <td>{{$form->name-kana}}</td>

            <th>年齢</th>
            <td>{{$form->age}}</td>

            <th>性別</th>
            <td>{{$form->gender}}</td>

            <th>住所</th>
            <td>{{$form->zipcode}}</td>

            <th>郵便番号</th>
            <td>{{$form->address}}</td>

            <th>お問い合わせ内容</th>
            <td>{{$form->body}}</td>
        </table>

        {!! Form::open(['url' => 'contact/complete',
                                    'class' => 'form-horizontal',
                                    'id' => 'post-input']) !!}
 
            @foreach($contact->getAttributes() as $key => $value)
                @if(isset($value))
                    @if(is_array($value))
                        @foreach($value as $subValue)
                            <input name="{{ $key }}[]" type="hidden" value="{{ $subValue }}">
                        @endforeach
                    @else
                        {!! Form::hidden($key, $value) !!}
                    @endif
 
                @endif
            @endforeach

        <input type="submit" name="action" value="戻る">

        <input type="submit" name="action" value="送信">

    </form>
@endsection
</body>
</html>