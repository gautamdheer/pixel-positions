@php
$classes = 'bg-white/5 justify-between rounded-xl border border-transparent hover:border-blue-800 p-4 group transition-colors duration-1000';
@endphp
<div {{ $attributes(['class' => $classes]) }}">
    {{ $slot }}
</div>
