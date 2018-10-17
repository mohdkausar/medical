@extends('layouts.app')
@section('content')
<section class="page-carousel">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img class="d-block w-100" src="img/doc2.jpg" alt="First slide">
			</div>

			<div class="item">
				<img class="d-block w-100" src="img/hero-bg.jpg" alt="Second slide">
			</div>

			<div class="item">
				<img class="d-block w-100" src="img/medication.jpg" alt="Third slide">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<section class="container">
	<div class="row">
		<div class="elements-aside services solid-color">
			<ul>
				<li class="color-1">
					<i class="fa fa-heartbeat" aria-hidden="true"></i>
					<h4>Book an Appointment</h4>
					<p>Now, you can book your appointment online! Just register or Login.</p>
					<br><br>
					<a href="appointments-reserved.php" class="btn btn-green btn-xsmall pull-right" role="button">View Dashboard</a>
				</li>
				<li class="color-2">
					<i class="fa fa-hourglass-half" aria-hidden="true"></i>
					<h4>Distributorship and Frenchisee</h4>
					<p>You can take the Distributorship and Frenchisee of the hair technology by consulting with {{ DOCTOR_NAME }}.</p>
					<p>For more information, visit <a href="#">here</a>.</p>
				</li>
				<li class="color-1">
					<i class="fa fa-id-badge" aria-hidden="true"></i>
					<h4>Hair Specialist</h4>
					<p>If you need a doctor who assist you about the hair and related problems. Contacs us:							
					</p>
					<div class="contact-info">
						<p><span class="fa fa-phone"> <a href="tel:+919795454878">+91 9795454878</a></span></p>
						<p><span class="fa fa-envelope"> <a href="mailto:abc@abc.com">abc@abc.com</a></span></p>
					</div>
					<a href="appointments-reserved.php" class="btn btn-green btn-xsmall pull-right" role="button">Contact</a>
				</li>
			</ul>
		</div>
		<div class="services-app">
			<img src="img/icon-edit.png" alt="icon edit" class="img-responsive">
			<h4>Modify, Cancell, Add Calendar or Print</h4>
			<p>Now, You can create your appointment online also modify, Cancell, Add Calendar, Print it. Where you want!</p>
		</div>
		<div class="services-app">
			<img src="img/icon-doctor.png" alt="icon edit" class="img-responsive">
			<h4>Find Doctors</h4>
			<p>MAS has a system where you can know more about doctors, biography, specializations and a pic where you feel confortable to choose who you want.</p>
		</div>
		<div class="services-app">
			<img src="img/icon-chat.png" alt="icon edit" class="img-responsive">
			<h4>¿Doubts?</h4>
			<p>MAS has a system where you can chat with a person that is going to help you about how to use the platform and get an appointment.</p>
		</div>
		<div class="services-app">
			<img src="img/icon-results.png" alt="icon edit" class="img-responsive">
			<h4>Check status of Examination Medical </h4>
			<p>You could see the result of examinations and authorizations pending. Everything Online!</p>
		</div>
	</div>
</section>
<section class="who-is account-zone">
	<div class="container">
		<div class="main-container">
			<div class="row">
				<div class="title-blog">
					<h2>Who is {{ DOCTOR_NAME }}</h2>
					<hr>
					<p>A physician is a practitioner who practices medicine and seeks to maintain and restore human health through the study, diagnosis, and treatment of the patient's illness or injury. A physician is a practitioner who practices medicine and seeks to maintain and restore human health through the study, diagnosis, and treatment of the patient's illness or injury. A physician is a practitioner who practices medicine and seeks to maintain and restore human health through the study, diagnosis, and treatment of the patient's illness or injury. </p>
					<p>A physician is a practitioner who practices medicine and seeks to maintain and restore human health through the study, diagnosis, and treatment of the patient's illness or injury.</p>
					<p>A physician is a practitioner who practices medicine and seeks to maintain and restore human health through the study, diagnosis, and treatment of the patient's illness or injury.</p>
					<br>
					<p>
						<span class="entry-category"><a href="#">Reviews &amp; Opinion</a></span>
					</p>
					<div class="row">
						<div class="list-opinins">
							<div class="item-blog">
								<div class="item-blog-content">
									<h3>
										<a href="single-post.html text-capitalize">Seraj ali</a>
										<label class="star-rating-container pull-right">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</label>
									</h3>
									<p class="text-ellipsis">It was really wonderful experience to have a treatment from {{ DOCTOR_NAME }}...who z very friendly in nature n never treat his patients like his clients.... I had been taken treatment for 1 year and has never got any professional feelings from his side..... A renowned knowledgeable person... Really great.</p>
									<a href="single-post.html" class="btn btn-green btn-xsmall" role="button">Read More</a>
									<p class="social-media">
										<a href="https://www.facebook.com/IwThemesTF" target="_blank"><i class="fa fa-facebook"></i></a>
										<a href="https://twitter.com/iwthemes" target="_blank"><i class="fa fa-twitter"></i></a>
										<a href="https://www.youtube.com/channel/UCEb3nAep6tYiAkZpqi0Kzew" target="_blank"><i class="fa fa-youtube-square"></i></a>
									</p>
									<p class="date">27 June 2017</p>
								</div>
							</div>
						</div>
						<div class="list-opinins">
							<div class="item-blog">
								<div class="item-blog-content">
									<h3><a href="single-post.html text-capitalize">Seraj ali</a>
									<label class="star-rating-container pull-right">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</label>

									</h3>
									<p class="text-ellipsis">It was really wonderful experience to have a treatment from {{ DOCTOR_NAME }}...who z very friendly in nature n never treat his patients like his clients.... I had been taken treatment for 1 year and has never got any professional feelings from his side..... A renowned knowledgeable person... Really great.</p>
									<a href="single-post.html" class="btn btn-green btn-xsmall" role="button">Read More</a>
									<p class="social-media">
										<a href="https://www.facebook.com/IwThemesTF" target="_blank"><i class="fa fa-facebook"></i></a>
										<a href="https://twitter.com/iwthemes" target="_blank"><i class="fa fa-twitter"></i></a>
										<a href="https://www.youtube.com/channel/UCEb3nAep6tYiAkZpqi0Kzew" target="_blank"><i class="fa fa-youtube-square"></i></a>
									</p>
									<p class="date">27 June 2017</p>
								</div>
							</div>
						</div>
						<div class="list-opinins">
							<div class="item-blog">
								<div class="item-blog-content">
									<h3><a href="single-post.html text-capitalize">Seraj ali</a>
									<label class="star-rating-container pull-right">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</label>

									</h3>
									<p class="text-ellipsis">It was really wonderful experience to have a treatment from {{ DOCTOR_NAME }}...who z very friendly in nature n never treat his patients like his clients.... I had been taken treatment for 1 year and has never got any professional feelings from his side..... A renowned knowledgeable person... Really great.</p>
									<a href="single-post.html" class="btn btn-green btn-xsmall" role="button">Read More</a>
									<p class="social-media">
										<a href="https://www.facebook.com/IwThemesTF" target="_blank"><i class="fa fa-facebook"></i></a>
										<a href="https://twitter.com/iwthemes" target="_blank"><i class="fa fa-twitter"></i></a>
										<a href="https://www.youtube.com/channel/UCEb3nAep6tYiAkZpqi0Kzew" target="_blank"><i class="fa fa-youtube-square"></i></a>
									</p>
									<p class="date">27 June 2017</p>
								</div>
							</div>
						</div>
					</div>
					<br><br>
					<div class="title-blog">
						<h2>Products and Services offered</h2>
						<hr>
						<p>Skin Technology in Civil Lines has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Skin Technology in Civil Lines has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have.</p>
						<p>Skin Technology in Civil Lines has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have.</p>
						<br>
						<p>
							<a href="#" class="pull-right btn btn-green btn-xsmall" role='button'>READ MORE</a>
						</p>
					</div>
					<br><br>
					<div class="title-blog">
						<h2>Treatment and Medicine</h2>
						<hr>
						<p>Skin Technology in Civil Lines has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Skin Technology in Civil Lines has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have.</p>
						<p>Skin Technology in Civil Lines has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have.</p>
						<br>
						<p>
							<a href="#" class="pull-right btn btn-green btn-xsmall" role='button'>READ MORE</a>
						</p>
					</div>
					<br><br>
					<div class="title-blog">
						<h2>Why Should Treat with {{ DOCTOR_NAME }}?</h2>
						<hr>
						<p>Skin Technology in Civil Lines has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Skin Technology in Civil Lines has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have.</p>
						<p>Skin Technology in Civil Lines has a wide range of products and services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have.</p>
						<br>
						<p>
							<a href="#" class="pull-right btn btn-green btn-xsmall" role='button'>READ MORE</a>
						</p>
					</div>
			</div>
		</div>
	</div>
</section>
<section class="blog preview" id="blog">
	<div class="container">
		<h2>Advertising Media</h2>
		<hr>
		<div class="row">
			<div class="box-view-doc">
				<div class="view-doc doc-bg-01">
					<div class="overlay-links">
						<a href="img/news1.jpg" download="download" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Download"><i class="fa fa-cloud-download"></i></a>
						<a href="#" data-toggle="tooltip" data-placement="bottom" title="" class="archive" data-original-title="Archive"><i class="fa fa-archive"></i></a>
						<div class="view-screen">
							<a href="img/news1.jpg" target="_blank">view document</a>
						</div>
					</div>
				</div>
				<ul class="view-doc-info list-unstyled">
					<li><h4>Amar Ujala Newspaper</h4></li>
					<li><p>Date: <span>09 Sep 2016</span></p></li>
				</ul>
			</div>
			<div class="box-view-doc">
				<div class="view-doc doc-bg-02">
					<div class="overlay-links">
						<a href="img/news2.jpg" download="download" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Download"><i class="fa fa-cloud-download"></i></a>
						<a href="#" data-toggle="tooltip" data-placement="bottom" title="" class="archive" data-original-title="Archive"><i class="fa fa-archive"></i></a>
						<div class="view-screen">
							<a href="img/news2.jpg" target="_blank">view document</a>
						</div>
					</div>
				</div>
				<ul class="view-doc-info list-unstyled">
					<li><h4>Amar Ujala Newspaper</h4></li>
					<li><p>Date: <span>09 Sep 2016</span></p></li>
				</ul>
			</div>
			<div class="box-view-doc">
				<div class="view-doc doc-bg-03">
					<div class="overlay-links">
						<a href="img/news3.jpg" download="download" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Download"><i class="fa fa-cloud-download"></i></a>
						<a href="#" data-toggle="tooltip" data-placement="bottom" title="" class="archive" data-original-title="Archive"><i class="fa fa-archive"></i></a>
						<div class="view-screen">
							<a href="img/news3.jpg" target="_blank">view document</a>
						</div>
					</div>
				</div>
				<ul class="view-doc-info list-unstyled">
					<li><h4>Amar Ujala Newspaper</h4></li>
					<li><p>Date: <span>09 Sep 2016</span></p></li>
				</ul>
			</div>
			<div class="box-view-doc">
				<div class="view-doc doc-bg-04">
					<div class="overlay-links">
						<a href="img/news4.jpg" download="download" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Download"><i class="fa fa-cloud-download"></i></a>
						<a href="#" data-toggle="tooltip" data-placement="bottom" title="" class="archive" data-original-title="Archive"><i class="fa fa-archive"></i></a>
						<div class="view-screen">
							<a href="img/news4.jpg" target="_blank">view document</a>
						</div>
					</div>
				</div>
				<ul class="view-doc-info list-unstyled">
					<li><h4>Amar Ujala Newspaper</h4></li>
					<li><p>Date: <span>09 Sep 2016</span></p></li>
				</ul>
			</div>

			<div class="box-view-doc">
				<div class="view-doc doc-bg-05">
					<div class="overlay-links">
						<a href="img/news5.jpg" download="download" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Download"><i class="fa fa-cloud-download"></i></a>
						<a href="#" data-toggle="tooltip" data-placement="bottom" title="" class="archive" data-original-title="Archive"><i class="fa fa-archive"></i></a>
						<div class="view-screen">
							<a href="img/news5.jpg" target="_blank">view document</a>
						</div>
					</div>
				</div>
				<ul class="view-doc-info list-unstyled">
					<li><h4>Amar Ujala Newspaper</h4></li>
					<li><p>Date: <span>09 Sep 2016</span></p></li>
				</ul>
			</div>
			<div class="box-view-doc">
				<div class="view-doc doc-bg-06">
					<div class="overlay-links">
						<a href="img/news6.jpg" download="download" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Download"><i class="fa fa-cloud-download"></i></a>
						<a href="#" data-toggle="tooltip" data-placement="bottom" title="" class="archive" data-original-title="Archive"><i class="fa fa-archive"></i></a>
						<div class="view-screen">
							<a href="img/news6.jpg" target="_blank">view document</a>
						</div>
					</div>
				</div>
				<ul class="view-doc-info list-unstyled">
					<li><h4>Amar Ujala Newspaper</h4></li>
					<li><p>Date: <span>09 Sep 2016</span></p></li>
				</ul>
			</div>

		</div>
	</div>
</section>
<section class="how-to" id="how-to">
	<div class="container">
		<div class="intro-how-to">
			<h2>¿How to use our Platform?</h2>
			<p>Are not sure how to use our Platform? Here, we're going to do more details about how to do it. Just click it!</p>
			<div class="row">
				<div class="facts">
					<span>100%</span>
					<p>Usable</p>
				</div>
				<div class="facts">
					<span>188k</span>
					<p>User Registred</p>
				</div>
				<div class="facts">
					<span>100%</span>
					<p>Mobile</p>
				</div>
			</div>
			<a href="login.html" class="btn btn-green btn-small" role="button">Get my Appointment</a>
		</div>
		<div class="video-how-to">
			<!-- <iframe src="img/MIONXFyt7tM.html"></iframe> -->
		</div>
	</div>
</section>
@endsection
