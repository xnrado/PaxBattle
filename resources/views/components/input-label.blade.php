@props(['value', 'required' => false])

<label {{ $attributes->merge(['class' => 'block items-start text-nord-5']) }}>
    <div class="flex">
        <div><strong>{{ $value ?? $slot }}</strong></div>
        @if($required)
            <div class="ml-1">*</div>
        @endif
    </div>
</label>
