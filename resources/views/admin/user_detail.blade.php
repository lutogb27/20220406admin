<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			<a href="{{ url('/admin/user_list') }}">ユーザー一覧</a> &gt; ユーザー詳細
		</div>
		<div class="card-body">

			<ul class="list-group">
				<li class="list-group-item">名前: {{ $user->name }}</li>
				<li class="list-group-item">フリガナ: {{ $user->name-kana }}</li>
        <li class="list-group-item">年齢: {{ $user->age }}</li>
        <li class="list-group-item">性別: {{ $user->gender }}</li>
        <li class="list-group-item">郵便番号: {{ $user->zipcode }}</li>
        <li class="list-group-item">住所: {{ $user->address }}</li>
        <li class="list-group-item">お問い合わせ内容: {{ $user->body }}</li>
				<li class="list-group-item">作成日: {{ $user->created_at->format('Y/m/d H:i:s') }}</li>
				<li class="list-group-item">更新日: {{ $user->updated_at->format('Y/m/d H:i:s') }}</li>
			</ul>
		</div>
	</div>
</div>
@endsection
</body>
</html>