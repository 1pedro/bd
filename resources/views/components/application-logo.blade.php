@props(['width'])

@php
    $classes = ($width ?? false)
                ? 'w-[40px] h-auto'
                : 'w-[100px] h-auto';
@endphp
<img src="{{asset("img/novo3.svg")}}"  alt=""  {{ $attributes->merge(['class' => $classes]) }}>