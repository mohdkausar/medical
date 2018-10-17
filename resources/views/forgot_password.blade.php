@extends('layouts.app')
@section('content')
<section class="forgot-password-section">
	<div class="login">
		<div class="container">
			<div class="login-form" style="float: none; margin: 0 auto;">
				<div class="data-form">

					<a href="#" class="logo"><img src="img/logo-simple.png" alt="logo"></a>


					<form class="form-login reset">
						<div class="alert alert-warning" role="alert">Please, enter you number document and your email and then check your inbox to reset the pass.</div>
						<div class="icon-data">
							<i class="fa fa-user-circle"></i>
						</div>
						<input type="number" placeholder="Number Document">
						<div class="icon-data">
							<i class="fa fa-envelope-open-o"></i>
						</div>
						<input type="text" placeholder="Email">
						<button class="btn btn-red" type="submit">Reset</button>
					</form>

					<span class="help">
						<a href="http://html.iwthemes.com/mas/login.html"><i class="fa fa-angle-double-left"></i> Back to Login </a>
						<a href="http://html.iwthemes.com/mas/help.html" class="help-link">¿Help?</a>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
