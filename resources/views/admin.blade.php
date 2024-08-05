@extends('layouts.app')

@section('meta')
    <meta name="description"
        content="Selamat datang di Cayo'us Familia Community. Sebuah komunitas bisnis yang memberikan kesempatan semua orang untuk mendapatkan penghasilan dan menggapai mimpi bersama.">
    <meta name="keywords" content="Landing Page">
    <meta name="author" content="Cayo'us Familia Community">

    <title>Admin - Cayo'us Familia Community</title>
@endsection

@push('css')
    <!-- Sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            font-family: "Montserrat", sans-serif;
        }
    </style>
@endpush


@section('content')
    <section class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="col-lg-6">
                                    <form action="{{ route('status.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <small>Update user status.</small><br>
                                        <label class="mt-4 mb-0 form-label col-form-label-sm"
                                            for="name">Username</label>
                                        <div class="input-group mb-3">
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror" id="userrname"
                                                name="username" aria-describedby="username">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-warning text-xs">Aktivasi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Sweetalert2 -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast'
            },
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true
        })

        @if (session('pesan'))
            @switch(session('level-alert'))
                @case('alert-success')
                Toast.fire({
                    icon: 'success',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-danger')
                Toast.fire({
                    icon: 'error',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-warning')
                Toast.fire({
                    icon: 'warning',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-question')
                Toast.fire({
                    icon: 'question',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @default
                Toast.fire({
                    icon: 'info',
                    title: '{{ Session::get('pesan') }}'
                })
            @endswitch
        @endif
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                Toast.fire({
                    icon: 'error',
                    title: '{{ $error }}'
                })
            @endforeach
        @endif
    </script>
@endpush
