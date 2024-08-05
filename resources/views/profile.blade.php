@extends('layouts.app')

@section('meta')
    <meta name="description"
        content="Selamat datang di Cayo'us Familia Community. Sebuah komunitas bisnis yang memberikan kesempatan semua orang untuk mendapatkan penghasilan dan menggapai mimpi bersama.">
    <meta name="keywords" content="Landing Page">
    <meta name="author" content="{{ $data->name }}">

    <title>{{ $data->username }} - Cayo'us Familia Community</title>
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
        <div class="row justify-content-center mb-3">
            <p class="text-center"><strong>https://landing.cayous-familia.com/{{ $data->username }}</strong></p>
            <div class="col-10 col-md-3">
                <div class="card shadow border-0 rounded-5 bg-dark text-warning">
                    <div class="card-body">
                        <img src="{{ asset('storage/profile/' . $data->avatar) }}" class="rounded-5 w-100" alt="avatar">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="col-lg-6">
                                    <form action="{{ route('profile.avatar', auth()->user()->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <p class="m-0"><strong>Profile Picture</strong></p>
                                        <small>Update your accounts profile picture.</small><br>
                                        <label class="mt-4 mb-0 form-label col-form-label-sm" for="avatar">Avatar</label>
                                        <div class="input-group mb-3">
                                            <input class="form-control @error('avatar') is-invalid @enderror" type="file"
                                                id="avatar" name="avatar"
                                                accept="image/png, image/jpeg, image/jpg, image/webp">
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-dark text-xs">SAVE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="col-lg-6">
                                    <form action="{{ route('profile.update', auth()->user()->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <p class="m-0"><strong>Profile Information</strong></p>
                                        <small>Update your accounts profile information and email address.</small><br>
                                        <label class="mt-4 mb-0 form-label col-form-label-sm" for="name">Name</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" aria-describedby="name"
                                                value="{{ $data->name }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label class="mb-0 form-label col-form-label-sm" for="username">Username</label>
                                        <div class="input-group mb-3">
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror" id="username"
                                                name="username" aria-describedby="username" value="{{ $data->username }}">
                                            <small class="text-secondary"><span style="color: red">*</span>Tulis nama depan
                                                Anda atau nama unik
                                                dengan angka. Jangan menggunakan tanda baca.</small>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label class="mb-0 form-label col-form-label-sm" for="email">Email</label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" aria-describedby="email"
                                                value=" {{ $data->email }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label class="mb-0 form-label col-form-label-sm" for="phone">Phone</label>
                                        <div class="input-group mb-3">
                                            <input type="number" min="0"
                                                class="form-control @error('phone') is-invalid @enderror" id="phone"
                                                name="phone" aria-describedby="phone" value="{{ $data->phone }}">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label class="mb-0 form-label col-form-label-sm" for="phone">About</label>
                                        <div class="input-group mb-3">
                                            <textarea name="about" id="about" rows="10" class="form-control @error('about') is-invalid @enderror"
                                                placeholder="Tulis tentang diri anda...">{{ $data->about }}</textarea>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-dark text-xs">SAVE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="col-lg-6">
                                    <form action="{{ route('profile.sosmed', auth()->user()->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <p class="m-0"><strong>Social Media Information</strong></p>
                                        <small>Update your accounts sosial media information and link address.</small><br>
                                        <label class="mt-4 mb-0 form-label col-form-label-sm" for="instagram">Instagram
                                            (optional)</label>
                                        <div class="input-group mb-3">
                                            <input type="text"
                                                class="form-control @error('instagram') is-invalid @enderror"
                                                id="instagram" name="instagram" aria-describedby="instagram"
                                                value="{{ $data->instagram }}">
                                            @error('instagram')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label class="mb-0 form-label col-form-label-sm" for="facebook">Facebook
                                            (optional)</label>
                                        <div class="input-group mb-3">
                                            <input type="text"
                                                class="form-control @error('facebook') is-invalid @enderror"
                                                id="facebook" name="facebook" aria-describedby="facebook"
                                                value="{{ $data->facebook }}">
                                            @error('facebook')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label class="mb-0 form-label col-form-label-sm" for="youtube">Youtube
                                            (optional)</label>
                                        <div class="input-group mb-3">
                                            <input type="text"
                                                class="form-control @error('youtube') is-invalid @enderror" id="youtube"
                                                name="youtube" aria-describedby="youtube" value="{{ $data->youtube }}">
                                            @error('youtube')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label class="mb-0 form-label col-form-label-sm" for="twitter">Twitter
                                            (optional)</label>
                                        <div class="input-group mb-3">
                                            <input type="text"
                                                class="form-control @error('twitter') is-invalid @enderror" id="twitter"
                                                name="twitter" aria-describedby="twitter" value="{{ $data->twitter }}">
                                            @error('twitter')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-dark text-xs">SAVE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="col-lg-6">
                                    <form action="{{ route('profile.password', auth()->user()->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <p class="m-0"><strong>Update Password</strong></p>
                                        <small>Ensure your account is using a long, random password to stay
                                            secure.</small><br>
                                        <label class="mt-4 mb-0 form-label col-form-label-sm" for="old_password">Current
                                            Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password"
                                                class="form-control @error('old_password') is-invalid @enderror"
                                                id="old_password" name="old_password" aria-describedby="old_password">
                                            @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label class="mb-0 form-label col-form-label-sm" for="new_password">New
                                            Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                id="new_password" name="new_password" aria-describedby="new_password">
                                            @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label class="mb-0 form-label col-form-label-sm" for="confirm_password">Confirm
                                            Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password"
                                                class="form-control @error('confirm_password') is-invalid @enderror"
                                                id="confirm_password" name="confirm_password"
                                                aria-describedby="confirm_password">
                                            @error('confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-dark text-xs">SAVE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="col-lg-6">
                                    <p class="m-0"><strong>Delete Account</strong></p>
                                    <small>Once your account is deleted, all of its resources and data will be
                                        permanently deleted.</small><br>
                                    <small>Before deleting your account, please download any data or information that
                                        you wish to retain.</small><br>
                                    <button class="btn btn-xs btn-danger mt-4 text-xs"
                                        onclick="deleteAccount({{ $data->id }})">
                                        DELETE ACCOUNT</button>
                                    <form id="delete-form-{{ $data->id }}"
                                        action="{{ route('profile.destroy', $data->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
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
    <script>
        function deleteAccount(id) {
            Swal.fire({
                title: 'Are you sure?',
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Delete'
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                } else if (
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe !',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
