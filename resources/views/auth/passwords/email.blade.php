<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<title>CRIPT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/my-login.css')}}">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
                        <span>Mb cript system</span>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">パスワードを忘れました</h4>
							@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
								<div class="form-group">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="メールアドレス">
									@error('email')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
									<div class="form-text text-muted">
										メールアドレスを入力し、「パスワードを変更す る」ボタンをクリックして下さい
									</div>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary">
										パスワードを変更する
									</button>
								</div>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; 副業ノウハウ 
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="{{(asset('js/jquery.min.js'))}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/my-login.js')}}"></script>
</body>
</html>