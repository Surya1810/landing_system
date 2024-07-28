@extends('layouts.app')

@section('meta')
    <meta name="description"
        content="Selamat datang di Cayo'us Familia Community. Sebuah komunitas bisnis yang memberikan kesempatan semua orang untuk mendapatkan penghasilan dan menggapai mimpi bersama.">
    <meta name="keywords" content="Landing Page, ">
    <meta name="author" content="{{ $data->name }}">

    <title>{{ $data->username }} - Cayo'us Familia Community</title>
@endsection

@push('css')
    <style>
        * {
            font-family: "Montserrat", sans-serif;
        }

        .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.5);
            /* Ubah warna latar belakang */
            backdrop-filter: blur(5px);
            /* Tambahkan efek blur */
        }
    </style>
@endpush


@section('content')
    <!-- Start Content -->
    @isset($data)
        <!-- Heroes -->
        <section class="heroes bg-dark">
            <div class="px-4 py-5 mb-5 text-center">
                <img class="d-block mx-auto mb-4" src="{{ asset('assets/img/logo/Icon_white.png') }}" alt="logo_alt"
                    width="72">
                <h1 class="display-5 fw-bold text-warning">Selamat Datang</h1>
                <div class="col-lg-6 mx-auto text-warning">
                    <p class="lead mb-4">Tulis kisah sukses Anda bersama kami. Komunitas bisnis terbaik akan kami ciptakan
                        untuk Anda!</p>
                    <a id="link-profile" class="btn btn-outline-warning btn-lg px-4 mt-3">Kenali Lebih
                        Jauh <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <!-- Profile -->
        <section class="s-line-hr-top" style="background-color: #FFFFFF;" id="section-profile">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-3">
                        <div class="card shadow border-0 rounded-5 bg-dark text-warning">
                            <div class="card-body">
                                <img src="{{ asset('storage/profile/' . $data->avatar) }}" class="rounded-5 w-100 mb-3"
                                    alt="avatar">

                                <h2 class="fs-4 fw-bold text-center">{{ $data->name }}</h2>

                                @isset($data->about)
                                    <p class="text-center">{{ $data->about }}</p>
                                @endisset

                                <div class="row g-2 my-4">
                                    <div class="col-12">
                                        <i class="fa-solid fa-phone fa-xl me-2"></i> +{{ $data->phone }}
                                    </div>
                                    <div class="col-12">
                                        <i class="fa-solid fa-envelope fa-xl me-2"></i> {{ $data->email }}
                                    </div>
                                </div>

                                <div class="text-center">
                                    <a href="https://wa.me/{{ $data->phone }}" class="btn btn-lg btn-warning rounded-5"><i
                                            class="fa-brands fa-whatsapp"></i> Hubungi
                                        Saya</a>
                                </div>
                            </div>

                            <div class="card-footer text-center rounded-5">
                                <div class="row m-3">
                                    @isset($data->facebook)
                                        <div class="col">
                                            <a href="#">
                                                <i class="fa-brands fa-facebook-f fa-xl text-warning"></i>
                                            </a>
                                        </div>
                                    @endisset
                                    @isset($data->twitter)
                                        <div class="col">
                                            <a href="#">
                                                <i class="fa-brands fa-twitter fa-xl text-warning"></i>
                                            </a>
                                        </div>
                                    @endisset
                                    @isset($data->youtube)
                                        <div class="col">
                                            <a href="#">
                                                <i class="fa-brands fa-youtube fa-xl text-warning"></i>
                                            </a>
                                        </div>
                                    @endisset
                                    @isset($data->instagram)
                                        <div class="col">
                                            <a href="#">
                                                <i class="fa-brands fa-instagram fa-xl text-warning"></i>
                                            </a>
                                        </div>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tentang CF Community -->
        <section class="container my-5">
            <h3 class="fw-light fs-2 mb-5 text-center"><strong class="fw-700">Cayo'us Familia Community</strong> adalah
                sebuah
                komunitas bisnis yang memberikan
                kesempatan semua orang untuk mendapatkan <strong class="fw-700">penghasilan</strong> & menggapai <strong
                    class="fw-700">mimpi</strong> bersama.</h3>
        </section>

        <!-- Hal -->
        <section class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card shadow border-0 rounded-5 bg-dark text-warning">
                        <div class="card-body">
                            <h2 class="fs-2 fw-600 text-warning text-center">Mungkin ada yang mengalami hal ini?</h2>
                            <div class="row text-white my-3">
                                <div class="col-12 col-md-6">
                                    <h3 class="fs-5">Susah mencari pekerjaan?</h3>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h3 class="fs-5">Ingin punya penghasilan Tambahan</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimoni -->
        <section class="bg-dark">
            <div class="container">
                <section id="aspiration" class="py-lg-5 py-4">
                    <div class="container text-white">
                        <div class="row px-lg-5 px-3 py-3 py-sm-2">
                            <h2 class="fs-2 fw-600 text-warning">
                                Testimoni </h2>
                            <h3 class="fw-light fs-1 mb-5">
                                ”Meningkatkan kesempatan <strong class="fw-700">tumbuh</strong> berjuta insan melalui solusi
                                finansial digital yang <strong class="fw-700">berfokus pada kehidupan</strong>” </h3>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <!-- CTA -->
        <section class="join">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="container-gap-lg card-address shadow bg-dark">
                        <div class="row justify-content-center align-items-center">
                            <div class="header col-lg-6 col-md-6 col-sm-12">
                                <h2 class="text-warning fw-600 mb-3">
                                    Temukan solusi Anda bersama Cayo'us Familia </h2>
                                <p class="text-white mb-3">
                                    Cayo'us Familia merupakan komunitas bisnis yang tepat untuk semua kebutuhan Anda </p>
                                <a href="#" class="btn btn-lg btn-warning rounded-4 me-2 my-2"><i
                                        class="fa-brands fa-whatsapp"></i> Hubungi
                                    saya</a>
                                <a href="#" class="btn btn-lg btn-outline-warning rounded-4">Seminar online gratis</a>
                            </div>
                            <div class="d-none d-md-block col-12 col-lg-6">
                                <img src="{{ asset('assets/img/logo/Icon_white.png') }}" class="d-block mx-lg-auto img-fluid"
                                    alt="icon_cf" width="50%" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if ($data->status == true)
        @else
            <div class="modal modal-backdrop d-block" tabindex="-1" id="staticBackdrop" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content rounded-3 shadow border-0">
                        <div class="modal-body p-4 text-center">
                            <h5 class="mb-2">Belum melakukan aktivasi?</h5>
                            <small class="mb-0">Silahkan melakukan aktivasi terlebih dahulu.</small>
                        </div>
                        <div class="modal-footer flex-nowrap p-0">
                            <a href="#"
                                class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 border-end"><strong>Aktivasi</strong></a>
                            <a class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Nanti</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endisset
    <!-- End Content -->

    <!-- Back to top button -->
    <button type="button" class="btn btn-dark btn-floating btn-lg shadow-lg" id="btn-back-to-top"
        aria-label="Back to Top">
        <i class="fas fa-angle-up fa-2xl text-center text-warning"></i>
    </button>
    <!-- Whatsapp button -->
    <button type="button" class="btn btn-dark btn-floating btn-lg border-0 shadow-lg" id="whatsapp"
        aria-label="Whatsapp">
        <a href="https://wa.me/{{ $data->phone }}" target="_blank"><i class="fa-brands fa-whatsapp fa-2xl text-center"
                style="color: #fff;margin-top: 10px;"></i></a>
    </button>
@endsection

@push('scripts')
    <script>
        document.getElementById('link-profile').addEventListener('click', function() {
            document.getElementById('section-profile').scrollIntoView({
                behavior: "smooth"
            });
        });

        $(document).ready(function() {
            $('#staticBackdrop').modal({
                backdrop: 'static', // Prevent closing when clicking outside
                keyboard: false // Prevent closing with keyboard
            });
        });
    </script>
@endpush
