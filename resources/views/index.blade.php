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
                </div>
            @endif
                <form method="post" action="{{ route('confirm') }}">
                    <table>
                    @csrf
                        <tr>
                            <th>名前</th>
                            <td>
                                <input type="text" name="name">
                            </td>
                        </tr>

                        <tr>
                            <th>フリガナ</th>
                            <td>
                                <input type="text" name="kana">    
                            </td>
                        </tr>

                        <tr>
                            <th>年齢</th>
                            <td>
                                <input type="text" name="age">
                            </td>
                        </tr>

                        <tr>
                            <th>性別</th>    
                            <td>
                                <input type="text" name="gender"> 
                            </td>
                        </tr>

                        <tr>
                            <th>郵便番号</th>
                            <td>
                                <input type="text" name="zipcode">
                            </td>
                        </tr>

                        <tr>    
                            <th>住所</th>
                            <td>
                                <input type="text" name="address"> 
                            </td>
                        </tr>

                        <tr>
                            <th>お問い合わせ内容</th>
                            <td>
                                <textarea name="body"></textarea>
                            </td>
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