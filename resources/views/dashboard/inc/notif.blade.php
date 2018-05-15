
@if(session('success'))
	<div class="alert alert-success alert-dismissible fade show">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	    {{ session('success') }}
	</div>
@endif

<<<<<<< HEAD
@if(session('error'))
	<div class="alert alert-danger alert-dismissible fade show">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	    {{ session('error') }}
	</div>
@endif

=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
@if(count($errors) > 0)
	<div class="alert alert-danger alert-dismissible fade show">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	    {{ $errors->first() }}
	</div>
@endif