@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum título</h1>
<img src="/img/banner.jpg" alt="Banner">

@php
    $name = "João";
    echo $name;
@endphp

<!-- Comentário do HTML -->
{{-- Este é o comentário do Blade --}}

@endsection