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

        {{$form->name}}

        {{$form->name-kana}}

        {{$form->age}}

        {{$form->gender}}

        {{$form->address}}

        {{$form->zipcode}}

        {{$form->body}}

        <input type="submit" name="action" value="戻る">

        <input type="submit" name="action" value="送信">

        @foreach($form->getAttributes() as $key => $value)
            <input type="hidden" name="{{$key}}" value="{{$value}}">
        @endforeach
    </form>
</body>
</html>