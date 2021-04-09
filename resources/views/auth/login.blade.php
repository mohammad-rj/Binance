<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
	<title>Yoast Premium Adapter 認証システム &mdash; </title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/my-login.css')}}">
	
</head>
<body class="my-login-page">
<div class="container h-100">
		<div class="row justify-content-md-center h-100 ">
			<div class="card-wrapper ">
				<div class="brand">
						<span>Mb cript system</span>
					</div>
				<div class="card fat ">
					<div class="card-body">
						<h4 class="card-title">ログインしてください</h4>
						<!-- <form method="POST"> -->
						<form method="POST" action="{{ route('auth.login') }}">
						@csrf
							<div class="form-group">

								<input id="email" type="email" placeholder="メールアドレス" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

								@error('email')
										<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										</span>
								@enderror
							</div>

							<div class="form-group">

								<input id="password" type="password" placeholder="パスワード" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

									@error('password')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
							</div>

							<div class="form-group row">
								<div class="col-md-6 col-sm-6" style="margin-top:10px;">
									<label>
										<input type="checkbox" name="remember" id="remember">&nbsp;&nbsp;ログイン情報を保持
									</label>
								</div>
								<div class="col-md-6 col-sm-6 ">
									<button type="submit" class="btn btn-primary float-right">
									ログイン
									</button>
								</div>
							</form>
						</div>
						<div>
							<a href="{{route('auth.forgot')}}">
							パスワードを忘れた方
							</a>
						</div>
						<div>
							<a href="{{route('auth.register')}}">新規ユーザー登録</a>
						</div>
						<!-- </form> -->

					</div>
				</div>
				<div class="footer">
					Copyright &copy; 2021 &mdash; 副業ノウハウ
				</div>
			</div>
		</div>
	</div>


	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/my-login.js')}}"></script>
	</script>
</body>

</html>