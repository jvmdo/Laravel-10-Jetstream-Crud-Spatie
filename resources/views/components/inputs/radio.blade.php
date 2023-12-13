@props(['id', 'name', 'label', 'value', 'checked' => false])

@php
    $isChecked = old($name, $checked);
@endphp

<div class="relative block mb-2">
    <input type="radio" id="{{ $id ?? $name }}" name="{{ $name }}" value="{{ $value }}"
        {{ $isChecked ? 'checked' : '' }} {{ $attributes->merge(['class' => '']) }}>

    @if ($label ?? null)
        <label class="text-gray-700 pl-2" for="{{ $id ?? $name }}">
            {{ $label }}
        </label>
    @endif
</div>

@error($name)
    @include('components.inputs.partials.error')
@enderror
