@extends('frontend.master')

@section('content')

<div class="about-wrapper" id="about">
	<div class="container">
		<div class="row align-items-center justify-content-between about-text">
			<div class="col-md-12 col-lg-7">
				<div class="feature-img">
					<img src="{{url('/')}}/frontend_assets/assets_web/img/429e5f1d6bf5fa72f4f507b619576768.jpg" height="1100" width="740" class="img-fluid" alt="About Us">
				</div>
			</div>
			<div class="col-md-12 col-lg-5">
				<div class="text-block">
					<h6 class="heading-sm">About</h6>
					<h3>Summary Of Hospital</h3>
					<ul>
						<li>
							<p>
								Thank you for considering our clinic for you and your family’s dental needs. We are pleased to welcome you as a new patient and look forward to being of service to you. We provide a full range of general, preventive and cosmetic dental treatments in
								a relaxed atmosphere, using the latest technology. Our goal is to provide our patients with the best possible dental care in an environment of comfort and compassion.</p>
						</li>
					</ul>

					<hr>
					<blockquote class="blockquote quote-text">
						<p class="mb-0">“Once open, paste the appropriate Python code for your version of Sublime Text into the console.”</p>
						<cite class="quote-attribution">— Michael Smith</cite>
						<div class="signature">
							<img src="{{url('/')}}/frontend_assets/assets_web/img/35189a89e0cb403da69b85de9e0b3a0b.png" alt="Signature" height="134" width="84">
						</div>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.about us -->

<div class="department" id="department-list">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
				<div class="section-title">
					<h2>Department List</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/1">
						<div class="box-icon">
							<i class="flaticon-heart"></i>
						</div>
						<div class="box-text">
							<h5>Cardiology</h5>
						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/2">
						<div class="box-icon">
							<i class="flaticon-kidney-1"></i>
						</div>
						<div class="box-text">
							<h5>Gynaecology</h5>
						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/3">
						<div class="box-icon">
							<i class="flaticon-feeder"></i>
						</div>
						<div class="box-text">
							<h5>Nursing</h5>
						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/4">
						<div class="box-icon">
							<i class="flaticon-drug"></i>
						</div>
						<div class="box-text">
							<h5>Pharmacy</h5>
						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/10">
						<div class="box-icon">
							<i class="flaticon-sperm-2"></i>
						</div>
						<div class="box-text">
							<h5>Pregnancy</h5>
						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/5">
						<div class="box-icon">
							<i class="flaticon-focus"></i>
						</div>
						<div class="box-text">
							<h5>Psychology</h5>
						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/6">
						<div class="box-icon">
							<i class="flaticon-herbal"></i>
						</div>
						<div class="box-text">
							<h5>Radiotherapy</h5>

						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/7">
						<div class="box-icon">
							<i class="flaticon-surgery"></i>
						</div>
						<div class="box-text">
							<h5>Surgery</h5>

						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/8">
						<div class="box-icon">
							<i class="flaticon-herbal"></i>
						</div>
						<div class="box-text">
							<h5>Therapy</h5>

						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
			<div class="col-6 col-md-4 col-lg-2">
				<div class="box-widget">
					<a href="{{url('doctor/by/deparmtent')}}/9">
						<div class="box-icon">
							<i class="flaticon-x-ray"></i>
						</div>
						<div class="box-text">
							<h5>X-rey</h5>

						</div>
					</a>
				</div>
				<!-- /.box widget -->
			</div>
		</div>
	</div>
</div>
<!-- /.department -->

<div id="appointment-form" class="appointment-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6 demo-left">
				<div class="appointment-text">
					<h1>Book with your doctor</h1>
					<h3>Some up and coming trends are healthcare consolidation for independent healthcare centers that see a cut in unforeseen payouts.</h3>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="media contact-service">
								<i class="flaticon-world mr-3"></i>
								<div class="media-body">
									<h4 class="mt-0">Address</h4>
									<div>12/A,Sector: 10, Uttara-1230, Dhaka</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
				<div class="form-container">

					<!-- Message & exception -->
					<div class="col-sm-12"></div>

					<div class="tab-content" id="nav-tabContent">
						<a href="{{url('take/doctor/appoinment')}}" class="btn btn-success">
              <i class="icon-calendar"></i> Take Appointment
            </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- client part -->
<div class="partners-content">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6 col-sm-4 col-md-2">
				<div class="partner-logo">
					<a href="www.Pharmacy.html"><img src="{{url('/')}}/frontend_assets/assets_web/img/client-logo/50fb399e66852c9e6fa388c4236e919e.png" title="Pharmacy" width="500" height="500" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-6 col-sm-4 col-md-2">
				<div class="partner-logo">
					<a href="#"><img src="{{url('/')}}/frontend_assets/assets_web/img/client-logo/cee67dfd3c396010be2d4e22e9f402e7.png" title="Medicine" width="500" height="500" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-6 col-sm-4 col-md-2">
				<div class="partner-logo">
					<a href="#"><img src="{{url('/')}}/frontend_assets/assets_web/img/client-logo/a7156bacc66a5b220913b33af68ba20c.png" title="Test" width="500" height="500" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-6 col-sm-4 col-md-2">
				<div class="partner-logo">
					<a href="#"><img src="{{url('/')}}/frontend_assets/assets_web/img/client-logo/42bdd060fce9f96e8d455d6f5deac9e9.png" title="Dhaka Medical College" width="500" height="500" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-6 col-sm-4 col-md-2">
				<div class="partner-logo">
					<a href="#"><img src="{{url('/')}}/frontend_assets/assets_web/img/client-logo/66b0322026eebac6897eeb173bf010ad.png" title="BDTask Limited" width="500" height="500" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-6 col-sm-4 col-md-2">
				<div class="partner-logo">
					<a href="#"><img src="{{url('/')}}/frontend_assets/assets_web/img/client-logo/0fdced951d11a902bf91514588e1547b.png" title="Apollo Hospital" width="500" height="500" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.partners -->

<div class="doctor-list" id="doctors-list">
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
					<div class="section-title">
						<h2>Doctor List</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					</div>
				</div>
			</div>
			<section class="grid">
				<a class="grid__item" href="#">
					<h2 class="title title--preview">Cardiology</h2>
					<div class="loader"></div>
					<span class="dr-name">Sumon Ahmed
					</span>
					<div class="meta meta--preview">

						<span class="meta__position">Cardiology</span>
						<span class="meta__email">
							sumon@gmail.com
						</span>
					</div>
				</a>

				<a class="grid__item" href="#">
					<h2 class="title title--preview">Radiotherapy</h2>
					<div class="loader"></div>
					<span class="dr-name">Ratna
					</span>
					<div class="meta meta--preview">

						<span class="meta__position">Radiotherapy</span>
						<span class="meta__email">
							sumon@gmail.com
						</span>
					</div>
				</a>

				<a class="grid__item" href="#">
					<h2 class="title title--preview">Surgeon In Orthopedics</h2>
					<div class="loader"></div>
					<span class="dr-name">Sumon Ahmed
					</span>
					<div class="meta meta--preview">

						<span class="meta__position">Surgeon In Orthopedics</span>
						<span class="meta__email">
							ratna@gmail.com
						</span>
					</div>
				</a>

				<a class="grid__item" href="#">
					<h2 class="title title--preview">Cardiology</h2>
					<div class="loader"></div>
					<span class="dr-name">Sumon Ahmed
					</span>
					<div class="meta meta--preview">

						<span class="meta__position">Cardiology</span>
						<span class="meta__email">
							sumon@gmail.com
						</span>
					</div>
				</a>

				<a class="grid__item" href="#">
					<h2 class="title title--preview">Cardiology</h2>
					<div class="loader"></div>
					<span class="dr-name">Sumon Ahmed
					</span>
					<div class="meta meta--preview">

						<span class="meta__position">Cardiology</span>
						<span class="meta__email">
							sumon@gmail.com
						</span>
					</div>
				</a>

				<a class="grid__item" href="#">
					<h2 class="title title--preview">Surgeon In Orthopedics</h2>
					<div class="loader"></div>
					<span class="dr-name">Sumon Ahmed
					</span>
					<div class="meta meta--preview">

						<span class="meta__position">Surgeon In Orthopedics</span>
						<span class="meta__email">
							ratna@gmail.com
						</span>
					</div>
				</a>

			</section>

		</div>
	</div>
</div>
<!-- /.doctor list -->

<div class="blog-content">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
				<div class="section-title">
					<h2>Latest News</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-4">
				<article class="grid-content">
					<a href="news/details/6/Pie-Chart-Example.html" class="img-link">
						<img src="{{url('/')}}/frontend_assets/assets_web/img/blog/5752ebcf8f89ee656abde97aa12a0a07.jpg" class="img-fluid" alt="">
					</a>
					<div class="textContent">
						<div class="post-meta d-flex">
							<span class="date">
								23 January, 2019</span>
							<span class="categories">In
								<a href="#">X-rey</a>
							</span>
						</div>
						<h3>
							<a href="news/details/6/Pie-Chart-Example.html">Pie Chart Example</a>
						</h3>
						<p>Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical&#8230; ...</p>
						<a href="news/details/6/Pie-Chart-Example.html" class="read-more">Read More
							<i class="ti-arrow-right"></i>
						</a>
					</div>
				</article>
				<!-- /.Grid content -->
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4">
				<article class="grid-content">
					<a href="news/details/7/Pregnancy-also-known-as-gestation-is-the-time-during-which-one-or-more-offspring-develops-inside-a-woman.html" class="img-link">
						<img src="{{url('/')}}/frontend_assets/assets_web/img/blog/758cc8b40319760e26a484d22a6e45ff.jpg" class="img-fluid" alt="">
					</a>
					<div class="textContent">
						<div class="post-meta d-flex">
							<span class="date">
								24 January, 2019</span>
							<span class="categories">In
								<a href="#">Pregnancy</a>
							</span>
						</div>
						<h3>
							<a href="news/details/7/Pregnancy-also-known-as-gestation-is-the-time-during-which-one-or-more-offspring-develops-inside-a-woman.html">Pregnancy, also known as&#8230;</a>
						</h3>
						<p>professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem&#8230; ...</p>
						<a href="news/details/7/Pregnancy-also-known-as-gestation-is-the-time-during-which-one-or-more-offspring-develops-inside-a-woman.html" class="read-more">Read More
							<i class="ti-arrow-right"></i>
						</a>
					</div>
				</article>
				<!-- /.Grid content -->
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4">
				<article class="grid-content">
					<a href="news/details/8/What-is-cardiology.html" class="img-link">
						<img src="{{url('/')}}/frontend_assets/assets_web/img/blog/22a739e1e86e41efb77484a1e5b8cc9e.jpg" class="img-fluid" alt="">
					</a>
					<div class="textContent">
						<div class="post-meta d-flex">
							<span class="date">
								24 January, 2019</span>
							<span class="categories">In
								<a href="#">Cardiology</a>
							</span>
						</div>
						<h3>
							<a href="news/details/8/What-is-cardiology.html">What is cardiology?</a>
						</h3>
						<p>Cardiologists are doctors who specialize in diagnosing and treating diseases or conditions of the heart and blood vessels—the&#8230; ...</p>
						<a href="news/details/8/What-is-cardiology.html" class="read-more">Read More
							<i class="ti-arrow-right"></i>
						</a>
					</div>
				</article>
				<!-- /.Grid content -->
			</div>
		</div>
	</div>
</div>
<!-- /.blog -->
<!-- end main content -->

<div class="appointment text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Make an appointment!
					<a href="index.html#appointment-form" class="appointment-link js-scroll-trigger">Go there
						<i class="ti-arrow-right"></i>
					</a>
				</h2>
			</div>
		</div>
	</div>
</div>
<!-- /.appointment block -->
@endsection
