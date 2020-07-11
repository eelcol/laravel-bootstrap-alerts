<div class="alert alert-{{ $type }}" role="alert">
	@if(isset($list))
		<ul>
            @foreach ($list as $text)
                <li>{{ $text }}</li>
            @endforeach
        </ul>
    @elseif(isset($text))
		{{ $text }}
	@endif
</div>