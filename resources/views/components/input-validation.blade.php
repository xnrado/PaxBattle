@props(['field'])

<div>
    @error($field)
    <div class="flex items-center space-x-2 animate-fade-up animate-duration-100 animate-once">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-9-3a1 1 0 012 0v3a1 1 0 01-2 0V7zm1 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
        </svg>
        <span class="text-red-500 text-sm">{{ $message }}</span>
    </div>
    @enderror
</div>
