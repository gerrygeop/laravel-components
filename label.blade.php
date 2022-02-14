@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-slate-600']) }}>
    {{ $value ?? $slot }}
</label>
