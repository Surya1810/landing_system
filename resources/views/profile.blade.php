@extends('layouts.app')

@section('meta')
    <meta name="description"
        content="Selamat datang di Cayo'us Familia Community. Sebuah komunitas bisnis yang memberikan kesempatan semua orang untuk mendapatkan penghasilan dan menggapai mimpi bersama.">
    <meta name="keywords" content="Landing Page">
    <meta name="author" content="{{ $data->name }}">

    <title>{{ $data->username }} - Cayo'us Familia Community</title>
@endsection

@push('css')
    <style>
        * {
            font-family: "Montserrat", sans-serif;
        }
    </style>
@endpush


@section('content')
@endsection

@push('scripts')
@endpush
