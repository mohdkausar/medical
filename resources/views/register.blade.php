@extends('layouts.app')
@section('content')
<section class="register-section">
	<div class="login">
		<div class="container">
			<div class="register-form">

				<div class="data-form">
					<span class="back-to-login">
						<a class="btn btn-green btn-xsmall" href="login"><i class="fa fa-angle-double-left"></i> Back to Login</a>
					</span>
					<a href="#" class="logo"><img src="img/logo-simple.png" alt="logo"></a>
					<div class="form-login">
						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						<form name="registeration-form" id="registeration-form" action="saveUser" enctype="multipart/form-data" method="POST">
							@csrf
							<div class="row">
								<h3>Personal Information</h3>
								<div class="datapos">
									<div class="icon-data">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" id="first_name" name="first_name" placeholder="Your First name" value="{{old('first_name')}}">

									<div class="icon-data">
										<i class="fa fa-phone"></i>										
									</div>
									<input type="number" name="phone" id="phone" placeholder="Your Phone" value="{{old('phone')}}">

									<div class="icon-data"></div>
									<label>
										Are you Male or Female? {{ old('gender') }}
										<input type="radio" name="gender" id="male" value="male"  {{ old('gender')=="male" ? 'checked' : '' }} > Male
									</label>
									<label>
										<input type="radio" name="gender" id="female" value="female" {{ old('gender')=="female" ? 'checked' : '' }}> <span>Female</span>
									</label>
								</div>
								<div class="datapos">
									<div class="icon-data">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" placeholder="Your Last name" id="last_name" name="last_name" value="{{old('last_name')}}">
									
									<div class="icon-data">
										<i class="fa fa-envelope"></i>
									</div>
									<input type="email" placeholder="Your email" id="email" name="email" value="{{old('email')}}">

									<!-- <div class="icon-data">
										<i class="fa fa-user"></i>
									</div>
									<input type="file" name="avatar" id="avatar" accept="image/*"> -->
									
								</div>
							</div>

							<div class="row">
								<h3>Secret Information</h3>
								<div class="datapos">

									<div class="icon-data">
										<i class="fa fa-key"></i>
									</div>
									<input type="password" placeholder="Password" name="password" id="password" value="{{old('password')}}">
									
								</div>
								<div class="datapos">
									<div class="icon-data">
										<i class="fa fa-key"></i>
									</div>
									<input type="password" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation">
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
										<input type="checkbox" value="1" name="terms_conditions" id="terms_conditions" {{ old('terms_conditions')=="1" ? 'checked' : '' }}> Accept the Terms and Conditions
									</label>
								</div>
							</div>
							<!-- <input type="text" name="_token" value="{{ csrf_token() }}"> -->
							<button class="btn btn-default" type="submit">Create Account</button>
						</form>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>
@endsection
