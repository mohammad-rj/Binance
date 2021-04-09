<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
	<title>CRIPT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/my-login.css')}}">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
                        <span>Mb cript system</span>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">新規ユーザー登録</h4>
							<!-- <form method="POST"> -->
							 
								<div class="form-group">
									<input id="username" type="text" class="form-control" name="username" placeholder="noteのユーザー名">
								</div>

								<div class="form-group">
									<input id="email" type="email" class="form-control" name="email" placeholder="メールアドレス">
								</div>

								<div class="form-group">
									<input id="pwd" type="password" class="form-control" name="pwd" placeholder="パスワード">
								</div>

								<div class="form-group">
									<input id="confirm" type="password" class="form-control" name="confirm" placeholder="パスワード（確認）">
								</div>

								
								<div class="form-group no-margin">
									<button type="" class="btn btn-primary btn-block" onclick="register();">
										新規登録
									</button>
								</div>
								<div class="margin-top20 text-center">
									<span>既にアカウントをお持ちの場合はログインしてください<spam><a href="{{route('auth.login')}}">ログイン</a>
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
	</section>

	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/my-login.js')}}"></script>
</body>
</html>