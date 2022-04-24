<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
	@extends('layouts.defalt')

@section('content')
<h1>検索条件を入力してください</h1>
<form action="{{ url('/serch')}}" method="post">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label>名前</label>
    <input type="text" class="form-control col-md-5" placeholder="検索したい名前を入力してください" name="name">
  </div>
  <div class="form-group">
    <label>年齢</label>
    <input type="text" class="form-control col-md-5" placeholder="年齢を入力してください" name="age" value="{{ old("name")}}">
  </div>

  <div class="form-group">
     <label>年齢の条件</label>
     <select class="form-control col-md-5" name="age_condition">
       <option selected value="0">選択...</option>
       <option value="1">以上</option>
       <option value="2">以下</option>
     </select>
   </div>

  <div class="form-group">
     <label>性別</label>
     <select class="form-control col-md-5" name="sex">
       <option selected value="0">選択...</option>
       <option value="1">男</option>
       <option value="2">女</option>
     </select>
   </div>

  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</form>
@if(session('flash_message'))
<div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
@endif
<div style="margin-top:50px;">
<h1>ユーザー一覧</h1>
<table class="table">
  <tr>
    <th>ユーザー名</th><th>年齢</th><th>性別</th>
  </tr>
@foreach($users as $user)
  <tr>
    <td>{{$user->name}}</td><td>{{$user->age}}</td><td>{{$user->sex}}</td>
  </tr>
@endforeach
</table>
</div>
@endsection
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
				<li class="list-group-item">フリガナ: {{ $user->kana }}</li>
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