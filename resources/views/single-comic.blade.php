@extends('layouts.app')

@section('title')
	DC Comics | {{ $comic['series'] }}
@endsection

@section('main_content')
	<section class="cover-section ">
		<div class="container position-relative">
			<div class="img-wrapper position-absolute">
				<img src="{{ $comic['thumb'] }}" alt="">
			</div>
		</div>
	</section>
	<section class="top-section my-3">
		<div class="container">
			<div class="row">
				<div class="col col-8">
					<h2 class="text-uppercase">
						{{ $comic['series'] }}
					</h2>
					<div class="price-details">
						<div class="row">
							<div class="col col-8 d-flex justify-content-between">
								<p class="">
									U.S. Price: <span>
										{{ $comic['price'] }}
									</span>
								</p>
								<p class="text-uppercase">
									available
								</p>
							</div>
							<div class="col col-4">
								<p>Check Availability</p>
							</div>
						</div>
					</div>
					<p>
						{{ $comic['description'] }}
					</p>
				</div>
				<div class="col col-4">
					<div class="ad d-flex flex-column align-items-end">
						<h6 class="text-uppercase text-end">advertisment</h6>
						<img src="../images/adv.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bottom-section py-4">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<h5>Talent</h5>
					<div class="artists row">
						<div class="col col-4">
							<h6>Art by:</h6>
						</div>
						<div class="col col-8">

							@foreach ($comic['artists'] as $artist)
								<a href="">{{ $artist }}
									@if (!$loop->last)
										,
									@endif
								</a>
							@endforeach

						</div>
					</div>
					<div class="writers row">
						<div class="col col-4">
							<h6>Art by:</h6>
						</div>
						<div class="col col-8">

							@foreach ($comic['writers'] as $writer)
								<a href=""> {{ $writer }}@if (!$loop->last)
										,
									@endif
								</a>
							@endforeach

						</div>
					</div>
				</div>
				<div class="col-6">
					<h5>Specs</h5>
					<div class="series row">
						<div class="col col-4">
							<h6>Series:</h6>
						</div>
						<div class="col col-8">
							<p>{{ $comic['series'] }}
							</p>
						</div>
					</div>

					<div class="price row">
						<div class="col col-4">
							<h6>U.S. Price:</h6>
						</div>
						<div class="col col-8">
							<p>{{ $comic['price'] }}
							</p>
						</div>
					</div>

					<div class="sale row">
						<div class="col col-4">
							<h6>On Sale Date:</h6>
						</div>
						<div class="col col-8">
							<p>{{ $comic['sale_date'] }}
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
@endsection

{{-- <style>
	.col {
		background-color: #0d04
	}
</style> --}}
