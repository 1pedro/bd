@props(['width'])

@php

$width = isset($width);
@endphp

<img src="{{asset("img/novo3.svg")}}"  alt=""  style=" @if($width) width: 30px; @else width: 100px; @endif">
