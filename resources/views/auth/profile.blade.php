<<<<<<< HEAD
@extends('dashboard.layout.app')

@section('body')

<!-- Main wrapper  -->
<div id="main-wrapper">
	@include('dashboard.inc.header')
	@include('dashboard.inc.sidebar')
	<!-- End Left Sidebar  -->
	<!-- Page wrapper  -->
    <div class="page-wrapper">
			<!-- Bread crumb -->
			<div class="row page-titles">
					<div class="col-md-5 align-self-center">
							<h3 class="text-primary">Profile</h3> </div>
					<div class="col-md-7 align-self-center">
							<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
									<li class="breadcrumb-item active">Profile</li>
							</ol>
					</div>
			</div>
      <!-- End Bread crumb -->
			<div class="container-fluid">
				<!-- Start Page Content -->
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="card user">
							<div class="img-profile" style="background-image: url({{ asset('img/user/'.Auth::user()->img_profile)  }});"></div>
							<p>{{ Auth::user()->name }}</p>
							<span>{{ Auth::user()->email }}</span>
							{{-- <span class="birthday">{{ Auth::user()->birthday->format('l, d M Y') }}</span>
							<p class="address">
								{{ Auth::user()->address }}
							</p> --}}
						</div>
					</div>
					{{-- Edit Profile --}}
					<div class="col-sm-12 col-md-8">
						<div class="card">
							<div class="card-body">
								@include('dashboard.inc.notif')
								<form action="/users/update" method="POST" enctype="multipart/form-data">
									@csrf
									{{ method_field('PUT') }}
									{{-- Nama --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Nama</label></div>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
										</div>	
									</div>
									{{-- Email --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Email</label></div>
										<div class="col-sm-8">
											<input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
										</div>	
									</div>
									{{-- Kelamin --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Jenis Kelamin</label></div>
										<div class="col-sm-4">
											<select name="gender" class="form-control">
												<option value="1">Laki-laki</option>
												<option value="0">Perempuan</option>
											</select>
										</div>	
									</div>
									{{-- Tanggal lahir --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Tanggal Lahir</label></div>
										<div class="col-sm-4">
											<input type="date" class="form-control" name="birthday" value="{{ Auth::user()->birthday->format('Y-m-d') }}">
										</div>	
									</div>
									{{-- Alamat --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Alamat</label></div>
										<div class="col-sm-8">
											<textarea class="form-control" name="address">{{ Auth::user()->address }}</textarea>
										</div>	
									</div>
									{{-- Foto profile --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Foto Profile</label></div>
										<div class="col-sm-6">
											<input type="file" class="form-control" name="img_profile">
										</div>	
									</div>
									<div class="form-group row">
										<div class="col-sm-3"></div>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-primary">Update Profile</button>
										</div>	
									</div>
								</form>
							</div>
						</div>
=======
@extends('layouts.home')

@section('content')
	
<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="title">
						<h4>Profile</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ Auth::user()->name }}</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
				<div class="pd-20 bg-white border-radius-4 box-shadow">
					<div class="profile-photo">
						<img src="{{ asset('img/users/'.Auth::user()->img_profile) }}" alt="" class="avatar-photo">
					</div>
					<h5 class="text-center" style="margin-bottom: 20px">{{ Auth::user()->name }}</h5>
					<div class="profile-info">
						<ul>
							<li>
								<span>Email:</span>
								{{ Auth::user()->email }}
							</li>
							<li>
								<span>Tanggal Lahir:</span>
								{{ Auth::user()->birthday }}
							</li>
							<li>
								<span>Jenis Kelamin:</span>
								@if(Auth::user()->gender)
									Laki-laki
								@else
									Perempuan
								@endif
							</li>
							<li>
								<span>Alamat :</span>
								{{ Auth::user()->address }}
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
				<div class="bg-white border-radius-4 box-shadow height-100-p">
					<div class="profile-tab height-100-p">
						<form action="/profile/update" method="POST" enctype="multipart/form-data">
							<h4 class="text-primary" style="margin-bottom: 20px">Edit Profil</h4>
							{{ csrf_field() }}
							@include('inc.notif')
			                <div class="form-group">
			                	<label>Nama</label>
			                    <input type="text" class="form-control" placeholder="Nama"
			                    	name="name"
			                    	value="{{ Auth::user()->name}}">
			                </div>
			                <div class="form-group">
			                	<label>Email</label>
			                    <input type="email" class="form-control" placeholder="Email"
			                    	name="email"
			                    	value="{{ Auth::user()->email }}">
			                </div>
			                <div class="form-group">
			                    <div class="form-group">
			                        <label>Jenis Kelamin</label>
			                        <select class="form-control" name="gender">
			                        	@if(Auth::user()->gender)
											<option value="1" selected>Laki-laki</option>
											<option value="0">Perempuan</option>
										@else
											<option value="1">Laki-laki</option>
											<option value="0" selected>Perempuan</option>
			                        	@endif
			                        </select>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label>Tanggal Lahir</label>
			                    <input name="birthday" class="form-control" type="date" value="{{ Auth::user()->birthday }}">
			                </div>
			                <div class="form-group">
			                    <label>Alamat</label>
			                    <textarea name="address" class="form-control" style="max-height: 80px">{{ Auth::user()->address }}</textarea>
			                </div>
			                <div class="form-group">
								<label>Ganti Foto Profil</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="img_profile">
									<label class="custom-file-label">Choose file</label>
								</div>
							</div>
			               <div class="form-group mb-0">
								<input type="submit" class="btn btn-primary" value="Update Profil">
							</div>
						</form>
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
					</div>
				</div>
			</div>
		</div>
	</div>
<<<<<<< HEAD
    <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->

@endsection

{{-- CSS --}}
@section('css')
@endsection

{{-- JS --}}
@section('js')
=======
	
</div>


>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
@endsection