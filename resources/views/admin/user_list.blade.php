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
		<div class="card-header">ユーザー一覧</div>
		<div class="card-body">

			<ul class="list-group">
				@foreach ($user_list as $user)
				<li class="list-group-item">
					<a href="{{ url('/admin/user/' . $user->id) }}">
						{{ $user->name }}
					</a>
				</li>
				@endforeach
			</ul>
			
			<div class="mt-3">
				{{ $user_list->links() }}
			</div>
			
		</div>
	</div>
</div>
@endsection​
</body>
</html>