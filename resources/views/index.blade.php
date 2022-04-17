<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
 
@section('content')
    <div class="entire">
        <div class="next">
            <div class="heading">お問い合わせ</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                /div>
            @endif
                <form method="post" action="{{ route('confirm') }}">
                    <table>
                    @csrf
                        <tr>
                            <th>名前</th>
                            <td>
                                <input type="text" name="name">
                            </td>
                            @foreach ($errors->get('name') as $message)
                                <p class="名前を記入して下さい">{{ $message }}</p>
                            @endforeach
                        </tr>

                        <tr>
                            <th>フリガナ</th>
                            <td>
                                <input type="text" name="kana">    
                            </td>
                            @foreach ($errors->get('kana') as $message)
                                <p class="フリガナで記入して下さい">{{ $message }}</p>
                            @endforeach
                        </tr>

                        <tr>
                            <th>年齢</th>
                            <td>
                                <input type="text" name="age">
                            </td>
                            @foreach ($errors->get('kana') as $message)
                                <p class="年齢を数字で記入して下さい">{{ $message }}</p>
                            @endforeach
                        </tr>

                        <tr>
                            <th>性別</th>    
                            <td>
                                <input type="text" name="gender"> 
                            </td>
                            @foreach ($errors->get('kana') as $message)
                                <p class="性別を記入して下さい">{{ $message }}</p>
                            @endforeach
                        </tr>

                        <tr>
                            <th>郵便番号</th>
                            <td>
                                <input type="text" name="zipcode">
                            </td>
                            @foreach ($errors->get('kana') as $message)
                                <p class="郵便番号を7桁で記入して下さい">{{ $message }}</p>
                            @endforeach
                        </tr>

                        <tr>    
                            <th>住所</th>
                            <td>
                                <input type="text" name="address"> 
                            </td>
                            @foreach ($errors->get('kana') as $message)
                                <p class="住所を記入して下さい">{{ $message }}</p>
                            @endforeach
                        </tr>

                        <tr>
                            <th>お問い合わせ内容</th>
                            <td>
                                <textarea name="body"></textarea>
                            </td>
                            @foreach ($errors->get('kana') as $message)
                                <p class="内容を記入して下さい。">{{ $message }}</p>
                            @endforeach
                        </tr>
                    </table>

                    <input type="submit" value="送信">
@endsection
                </form>
            </div>
        </div>
    </div>
</body>
</html>