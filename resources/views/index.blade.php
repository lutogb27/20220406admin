<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="entire">
        <div class="next">
            <div class="heading">お問い合わせ</div>
                <form method="post" action="{{ route('confirm') }}">
                    <table>
                        <tbody>
                            <tr>
                                <th>名前</th>
                                <th>フリガナ</th>
                                <th>年齢</th>
                                <th>性別</th>
                                <th>郵便番号</th>
                                <th>住所</th>
                                <th>お問い合わせ内容</th>
                            </tr>
                            <td>
                                <input type="text" name="name">
                            </td>

                            <td>
                                <input type="text" name="name-kana">    
                            </td>

                            <td>
                                <input type="text" name="age">
                            </td>

                            <td>
                                <input type="text" name="gender"> 
                            </td>

                            <td>
                                <input type="text" name="zipcode">
                            </td>

                            <td>
                                <input type="text" name="address"> 
                            </td>

                            <td>
                                <textarea name="body"></textarea>
                            </td>
                            <td>
                                <input type="submit" value="送信">
                            </td>
                        </tbody> 
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>