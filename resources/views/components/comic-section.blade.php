<section class="comics-section">
	<div class="container comics-container d-flex flex-wrap py-5">

		@foreach ($comics as $comic)
			@include('components.comic-card', $comic)
		@endforeach

	</div>

	<div class="d-flex justify-content-center p-3">
		<button class="button brand text-uppercase py-2 px-5">load more</button>
	</div>
</section>
