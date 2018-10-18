@extends('layouts.app')
@section('content')
<section class="login-section">
	<div class="login">
		<div class="container">
			<div class="login-form" style="float: none;margin: 0 auto;">
				<div class="data-form">
					<a href="#" class="logo"><img src="img/logo-simple.png" alt="logo" class="img-responsive"></a>
					<form class="form-login">
						<div class="icon-data">
							<i class="fa fa-address-card"></i>
						</div>
						<select>
							<option>Select a Document</option>
							<option>id number</option>
						</select>
						<div class="icon-data">
							<i class="fa fa-user-circle"></i>
						</div>
						<input type="number" placeholder="Number Document">
						<div class="icon-data">
							<i class="fa fa-key"></i>
						</div>
						<input type="password" placeholder="Password">
						<a href="http://html.iwthemes.com/mas/appointments-reserved.php" class="btn btn-default" role="button">Login - Dashboard</a>

					</form>

					<a href="http://html.iwthemes.com/mas/register.html" class="btn btn-red register" role="button">Create a new account - Dashboard</a>
					<span class="help">
						<a href="http://html.iwthemes.com/mas/forgot-pass.html">Forgot Password?</a>
						<a href="http://html.iwthemes.com/mas/help.html" class="help-link">Help?</a>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
