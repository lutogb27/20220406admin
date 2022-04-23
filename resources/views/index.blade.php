<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
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
                            <th></th>
                            <td><div class="err-msg-name"></div></td>
                        </tr>
                        <tr>
                            <th>名前</th>
                            <td>
                                <input type="text" name="name" id="name" placeholder="漢字">
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><div class="err-msg-kana"></div></td>
                        </tr>
                        <tr>
                            <th>フリガナ</th>
                            <td>
                                <input type="text" name="kana" id="kana" placeholder="フリガナ">    
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><div class="err-msg-age"></div></td>
                        </tr>
                        <tr>
                            <th>年齢</th>
                            <td>
                                <input type="text" name="age" id="age" placeholder="年齢">
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><div class="err-msg-gender"></div></td>
                        </tr>
                        <tr>
                            <th>性別</th>    
                            <td>
                                <input type="text" name="gender" id="gender" placeholder="性別"> 
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><div class="err-msg-zipcode"></div></td>
                        </tr>
                        <tr>
                            <th>郵便番号</th>
                            <td>
                                <input type="text" name="zipcode" id="zipcode" placeholder="郵便番号">
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><div class="err-msg-address"></div></td>
                        </tr>
                        <tr>    
                            <th>住所</th>
                            <td>
                                <input type="text" name="address" id="address" placeholder="住所"> 
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><div class="err-msg-body"></div></td>
                        </tr>
                        <tr>
                            <th>お問い合わせ内容</th>
                            <td>
                                <textarea name="body" id="body" placeholder="内容"></textarea>
                            </td>
                        </tr>
                    </table>    
                            <button type="submit" class="susumu" >送信</button>

@endsection
                </form>
            </div>
        </div>
    </div>
    <script>
        document.myform.susumu.addEventListener('click', function() {
            document.myform.submit();
        });
    </script>
<script src="{{ asset('js/form.js') }}"></script>
</body>
</html>