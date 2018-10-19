@extends('layouts.app')
@section('content')
<section class="login-section">
	<div class="login">
		<div class="container">
			<div class="login-form" style="float: none;margin: 0 auto;">
				<div class="data-form">
					<a href="#" class="logo"><img src="img/logo-simple.png" alt="logo" class="img-responsive"></a>
					<form class="form-login" name="login_form" id="login_form" action="login" method="POST">
						@csrf
						<div class="icon-data">
							<i class="fa fa-user"></i>
						</div>
						<input type="email" placeholder="Enter your email" name="email" id="email">
						<div class="icon-data">
							<i class="fa fa-key"></i>
						</div>
						<input type="password" placeholder="Enter your password" name="password" id="password" />
						<button type="submit" class="btn btn-default" role="button">Login</button>
					</form>
					<a href="http://html.iwthemes.com/mas/register.html" class="btn btn-red register" role="button">Create a new account</a>
					<span class="help">
						<a href="http://html.iwthemes.com/mas/forgot-pass.html">Forgot Password?</a>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
