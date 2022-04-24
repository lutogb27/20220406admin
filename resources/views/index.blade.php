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
                            <th>名前</th>
                            <td class="validation">
                                <input type="text" name="name" id="name" placeholder="漢字">
                                <p class="error"><span>名前を記入してください。</span><p>
                            </td>
                        </tr>
                        <tr>
                            <th>フリガナ</th>
                            <td class="validation">
                                <input type="text" name="kana" id="kana" placeholder="フリガナ">
                                <p class="error"><span>カタカナで記入してください。</span><p>    
                            </td>
                        </tr>

                        <tr>
                            <th>年齢</th>
                            <td class="validation">
                                <input type="text" name="age" id="age" placeholder="年齢">
                                <p class="error-aa"><span>2文字以内で記入してください。</span><p>
                            </td>
                        </tr>

                        <tr>
                            <th>性別</th>    
                            <td class="validation">
                                <input type="text" name="gender" id="gender" placeholder="性別">
                                <p class="error"><span>男女で記入してください。</span><p> 
                            </td>
                        </tr>

                        <tr>
                            <th>郵便番号</th>
                            <td class="validation">
                                <input type="text" name="zipcode" id="zipcode" placeholder="郵便番号">
                                <p class="error-zz"><span>7文字以内で記入してください。</span><p>
                            </td>
                        </tr>

                        <tr>    
                            <th>住所</th>
                            <td class="validation">
                                <input type="text" name="address" id="address" placeholder="住所">
                                <p class="error"><span>住所を記入してください。</span><p> 
                            </td>
                        </tr>

                        <tr>
                            <th>お問い合わせ内容</th>
                            <td class="validation">
                                <textarea name="body" id="body" placeholder="内容"></textarea>
                                <p class="error"><span>お問い合わせ内容を記入してください。</span><p>
                            </td>
                        </tr>
                    </table>    
                        <input type="submit" class="submit">送信</input>

@endsection
                </form>
            </div>
        </div>
    </div>
<script src="{{ asset('js/form.js') }}"></script>
</body>
</html>