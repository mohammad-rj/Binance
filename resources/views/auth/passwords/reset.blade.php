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
						<span>Yoast_premium_adapter</span><br><span> 会員ページ</span>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">パスワードを忘れました</h4>
							<form method="POST" action="{{ route('password.update') }}">
										@csrf

										<input type="hidden" name="token" value="{{ $token }}">

										<div class="form-group row">
												<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

												<div class="col-md-6">
														<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

														@error('email')
																<span class="invalid-feedback" role="alert">
																		<strong>{{ $message }}</strong>
																</span>
														@enderror
												</div>
										</div>

										<div class="form-group row">
												<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

												<div class="col-md-6">
														<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

														@error('password')
																<span class="invalid-feedback" role="alert">
																		<strong>{{ $message }}</strong>
																</span>
														@enderror
												</div>
										</div>

										<div class="form-group row">
												<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

												<div class="col-md-6">
														<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
												</div>
										</div>

										<div class="form-group row mb-0">
												<div class="col-md-6 offset-md-4">
														<button type="submit" class="btn btn-primary">
																{{ __('Reset Password') }}
														</button>
												</div>
										</div>
								</form>
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