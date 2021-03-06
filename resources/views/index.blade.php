@extends('layout.app')

@section('body')

<div id="all">
<<<<<<< HEAD
	@include('inc.header')
	<section style="background: url({{ asset('page/img/fixed-background-2.jpg') }}) center top no-repeat; background-size: cover;" class="bar no-mb color-white text-center bg-fixed relative-positioned">
		<div class="dark-mask"></div>
		<div class="container">
			<div class="icon icon-outlined icon-lg"><i class="fa fa-calendar-check-o"></i></div>
			<h3 class="text-uppercase">Selamat Datang di Event Bagus</h3>
			<p class="lead">Tempat dimana kamu dapat mencari dan berbagi event-event menarik dan menyenangkan</p>
		</div>
	</section>
	<section class="bg-white bar">
		<div class="container">
			<div class="heading text-center">
				<h2>Event Terbaru</h2>
			</div>
			@php
				$jumlah = 0;
			@endphp
			@foreach($events as $event)
				@if($jumlah == 0)
					<div class="row">
				@endif
				<div class="col-lg-4">
					<div class="home-blog-post">
						<div class="image" style="background-image: url({{asset('img/events/'.$event->image)}})">
							<div class="overlay d-flex align-items-center justify-content-center"><a href="/events/{{ $event->id }}" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
						</div>
						<div class="text">
							<h4><a href="/events/{{ $event->id }}">{{ $event->name }}</a></h4>
							<p class="author-category">By <a href="#">{{ $event->user->name }}</a>
							<p class="intro">
								{{ $event->description }}
							</p>
							<div class="detail">
								<span class="badge badge-primary">{{ $event->event_type->name }}</span>
								<span class="badge badge-success">Akan Datang</span>
								<span class="badge badge-info">Tiket {{ $event->tickets->count() }}/{{ $event->max_ticket }}</span>
							</div>
						</div>
					</div>
				</div>
				@php
					$jumlah++;
				@endphp
				@if($jumlah >= 3)
					@php
						$jumlah = 0;
					@endphp
						</div>
				@endif
			@endforeach
			</div>
			<div class="pages">
				<p class="loadMore text-center"><a href="/filter" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
			</div>
		</div>
	</section>
	<!-- FOOTER -->
	@include('inc.footer')
=======
  @include('inc.header');
  <section style="background: url({{ asset('page/img/fixed-background-2.jpg') }}) center top no-repeat; background-size: cover;" class="bar no-mb color-white text-center bg-fixed relative-positioned">
    <div class="dark-mask"></div>
    <div class="container">
      <div class="icon icon-outlined icon-lg"><i class="fa fa-calendar-check-o"></i></div>
      <h3 class="text-uppercase">Selamat Datang di Event Bagus</h3>
      <p class="lead">Tempat dimana kamu dapat mencari dan berbagi event-event menarik dan menyenangkan</p>
    </div>
  </section>
  <section class="bg-white bar">
    <div class="container">
      <div class="heading text-center">
        <h2>Event Terbaru</h2>
      </div>
      @php
        $jumlah = 0;
      @endphp
      @foreach($events as $event)
        @if($jumlah == 0)
          <div class="row">
        @endif
        <div class="col-lg-4">
          <div class="home-blog-post">
            <div class="image" style="background-image: url({{asset('img/events/'.$event->image)}})">
              <div class="overlay d-flex align-items-center justify-content-center"><a href="/events/{{ $event->id }}" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
            </div>
            <div class="text">
              <h4><a href="/events/{{ $event->id }}">{{ $event->name }}</a></h4>
              <p class="author-category">By <a href="#">{{ $event->user->name }}</a>  {{-- in <a href="blog.html">Webdesign</a></p> --}}
              <p class="intro">
                {{ $event->description }}
              </p>
              <div class="detail">
                <span class="badge badge-primary">{{ $event->event_type->name }}</span>
                <span class="badge badge-success">Akan Datang</span>
                <span class="badge badge-info">Tiket {{ $event->tickets->count() }}/{{$event->max_ticket}}</span>
              </div>
            </div>
          </div>
        </div>
        @php
          $jumlah++;
        @endphp
        @if($jumlah >= 3)
          @php
            $jumlah = 0;
          @endphp
            </div>
        @endif
      @endforeach
      </div>
      <div class="pages">
        <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
        <!-- <nav aria-label="Page navigation example" class="d-flex justify-content-center">
          <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
            <li class="page-item active"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li>
            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </nav> -->
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  @include('inc.footer')
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1

</div>

@endsection

{{-- CSS --}}
@section('css')
@endsection

{{-- JS --}}
@section('js')
@endsection