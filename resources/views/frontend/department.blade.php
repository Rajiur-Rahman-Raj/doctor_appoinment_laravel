@extends('frontend.master')

@section('content')

<div class="department mt-5" id="department-list">
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
		</div>
	</div>
</div>
<!-- /.department -->
@endsection
