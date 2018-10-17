@extends('layouts.app')
@section('content')
<section class="register-section">
	<div class="login">
		<div class="container">
			<div class="register-form">

				<div class="data-form">
					<span class="back-to-login">
						<a class="btn btn-green btn-xsmall" href="http://html.iwthemes.com/mas/login.html"><i class="fa fa-angle-double-left"></i> Back to Login</a>
					</span>

					<a href="#" class="logo"><img src="img/logo-simple.png" alt="logo"></a>


					<div class="form-login">
						<form>

							<div class="row">
								<h3>Personal Information</h3>
								<div class="datapos">

									<div class="icon-data">
										<i class="fa fa-address-card"></i>
									</div>
									<select>
										<option>Select a Document</option>
										<option>nit</option>
									</select>


									<div class="icon-data">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" placeholder="Your name">


									<div class="icon-data">
										<i class="fa fa-phone"></i>
									</div>
									<input type="number" placeholder="Your Phone">


									<label>
										<input type="radio" name="inlineRadioOptions" value="female"> <span>Female</span>
									</label>
									<label>
										<input type="radio" name="inlineRadioOptions" value="male"> Male
									</label>

								</div>
								<div class="datapos">

									<div class="icon-data">
										<i class="fa fa-user-circle"></i>
									</div>
									<input type="number" placeholder="Number Document">


									<div class="icon-data">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" placeholder="Last name">


									<div class="icon-data">
										<i class="fa fa-phone"></i>
									</div>
									<input type="number" placeholder="Alternative Phone">

								</div>
							</div>


							<div class="row">
								<h3>Data Information</h3>
								<div class="datapos">

									<div class="icon-data">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" placeholder="Username">


									<div class="icon-data">
										<i class="fa fa-user-circle"></i>
									</div>
									<input type="password" placeholder="Confirm Password">


									<div class="avatar-profile">
										<label>Image Profile</label>
										<input type="file" name="pic" accept="image/*">
									</div>

								</div>
								<div class="datapos">

									<div class="icon-data">
										<i class="fa fa-user-circle"></i>
									</div>
									<input type="password" placeholder="Password">

								</div>
							</div>

							<div class="row">
								<h3>terms and conditions</h3>
								<div class="terms-conditions">
									<div class="content-terms">
										<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of this website. These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</p>
										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
										<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of this website. These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</p>
										<p>Minors or people below 18 years old are not allowed to use this Website.</p>
										<ul>
											<li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
											<li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
											<li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
											<li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
										</ul>
									</div>
									<label>
										<input type="checkbox" value="option"> Accept the Terms and Conditions
									</label>
								</div>
							</div>
							<button class="btn btn-default">Create Account</button>
							<span class="help">
								<a href="http://html.iwthemes.com/mas/help.html" class="help-link">¿Help?</a>
							</span>
						</form>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>
@endsection
