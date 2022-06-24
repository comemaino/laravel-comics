@extends('layouts.app')

@section('title')
	DC Comics | Homepage
@endsection

@section('main_content')
	<div class="comics">

		@include('components.comic-section')

	</div>
@endsection
