{{-- COMIC-CARD --}}
<div class="comic-card">
	<div class="img-wrapper">
		<img src="{{ $thumb }}" alt="{{ $title }}">
	</div>
	<h5 class="text-uppercase mt-2">
		<a href="{{ route('single-comic', ['id' => $id]) }}">
			{{ $series }}
		</a>
	</h5>
</div>
{{-- /COMIC-CARD --}}
