@props(['tag'=>null,'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 transition-color duration-300 rounded-xl';

    if ($size == 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }
    if ($size == 'small') {
        $classes .= ' px-3 py-1 text-2xs';
    }
@endphp

@if($tag && isset($tag->name))
    <a class="{{ $classes }}" href="/tags/{{strtolower($tag->name)}}">{{ $tag->name }}</a>
@else
    <span class="{{ $classes }}">No tag available</span>
@endif
