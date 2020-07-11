@if($errors->any())

	@include("laravel-bootstrap-alerts::error", ['type' => 'danger', 'list' => $errors->all()])
@endif

@foreach($alerts as $type => $messages)
	@foreach($messages as $text)

		@include("laravel-bootstrap-alerts::alert", ['type' => $type, 'text' => $text])

	@endforeach
@endforeach
