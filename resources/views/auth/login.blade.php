@extends('layouts.app2')

@section('content')
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
            @if (Route::has('register'))
			<div class="login-menu">
				<ul>
					<li><a href="{{ route('register') }}">Novo Usuario.</a></li>
				</ul>
			</div>
            @endif
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login</h2>
						</div>
						<form method="POST" action="{{ route('login') }}">
                            @csrf

							<div class="input-group custom">
								<input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							<div class="input-group custom">
								<input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
								<div class="input-group-append custom">
									<span class="input-group-text">
                                        <i class="dw dw-padlock1"></i>
                                    </span>
								</div>
							</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<label class="custom-control-label" for="customCheck1">{{ __('Lembrar') }}</label>
									</div>
								</div>
                                @if (Route::has('password.request'))
								<div class="col-6">
									<div class="forgot-password"><a href="{{ route('password.request') }}">{{ __('Esqueceu sua senha?') }}</a></div>
								</div>
                                @endif
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<button type="submit" class="btn btn-primary btn-lg btn-block" href="">ENTRAR</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
