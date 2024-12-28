<x-dynamic-component
    component="select.option"
    :attributes="$attributes->except(['src'])"
    :label="$label"
    class="bg-nord-11"
>
    <div class="flex items-center gap-x-3">
        {{$label}}
    </div>
</x-dynamic-component>
