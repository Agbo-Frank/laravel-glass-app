@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
<div class="input-field">
    <i class="fa fa-user"></i>
    {{ $slot }}
</div>
