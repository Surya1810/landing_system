@extends('layouts.app')

@section('meta')
    <meta name="description"
        content="Selamat datang di Cayo'us Familia Community. Sebuah komunitas bisnis yang memberikan kesempatan semua orang untuk mendapatkan penghasilan dan menggapai mimpi bersama.">
    <meta name="keywords" content="Landing Page, ">
    <meta name="author" content="Cayo'us Familia Community">

    <title>Info - Cayo'us Familia Community</title>
@endsection

@push('css')
    <style>
        * {
            font-family: "Montserrat", sans-serif;
        }
    </style>
@endpush


@section('content')
    <!-- FAQ -->
    <section>
        <div class="container py-5"id="faq">
            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- desktop -->
                    <div class="d-none d-md-block">
                        <h1 class="kanit" style="font-weight: 700">Frequently Asked Questions</h1>
                        <p>Temukan jawaban cepat atas pertanyaan umum Anda dalam FAQs kami yang informatif dan
                            terperinci.
                        </p>
                    </div>
                    <!-- mobile -->
                    {{-- <div class="hidden-md-and-up text-center">
                            <h1 class="kanit" style="font-weight: 700">Frequently Asked Questions</h1>
                            <p>Temukan jawaban cepat atas pertanyaan umum Anda dalam FAQs kami yang informatif dan
                                terperinci.
                            </p>
                        </div> --}}

                    <div class="accordion accordion-flush my-5" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <b>Bagaimana cara buat Landing Page pribadi?</b>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Untuk memiliki halaman pribadi, caranya cukup mudah, Anda hanya perlu mengikuti cara
                                    berikut: <br><br>
                                    1. Lakukan pendaftaran di <strong><a class=" text-decoration-none text-warning"
                                            href="{{ route('register') }}">https://landing.cayous-familia.com/register</a></strong>.<br>
                                    2. <strong>Belum Aktif</strong>, Silahkan Lakukan aktivasi & pembayaran sebesar
                                    <strong><i>Rp30.000</i></strong> pada
                                    <strong><a href="" target="_blank"
                                            class="text-decoration-none text-warning">admin</a></strong>.<br>
                                    3. Tunggu 1x24 jam setelah konfirmasi admin agar Landing Page
                                    <strong>Aktif</strong>.<br>
                                    4. Setelah Landing Page aktif, Anda dapat login & melengkapi profile Anda.<br>
                                    5. Selesai! Anda dapat menggunakan Landing Page Anda untuk melakukan promosi online.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <b>Apa itu Landing Page pribadi?</b>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Landing Page adalah fasilitas web support untuk seluruh mitra/reseller Cayo'us Familia
                                    Community yang didapatkan dengan sangat mudah dan harga yang terjangkau. Manfaat utama
                                    dari Landing Page ini adalah untuk membantu para reseller/mitra dalam mempromosikan
                                    bisnis kepada orang lain dan untuk memberikan Branding Profesional kepada para
                                    mitra.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <b>Bagaimana iklan Landing Page pribadi saya?</b>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Kami menyediakan jasa iklan buat kamu yang ingin mempromosikan Landing Page secara
                                    online. untuk info lebih lanjut silahkan hubungi <strong><a href=""
                                            target="_blank" class="text-decoration-none text-warning">admin</a></strong>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img class="w-100" src="{{ asset('assets/img/vector/CS.png') }}" alt="Customer Service">
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
                            Tentang kami</h2>
                        <h3 class="fw-light fs-2 mb-5"><strong class="fw-700">Cayo'us Familia Community</strong> adalah
                            sebuah komunitas bisnis yang memberikan kesempatan semua orang untuk mendapatkan <strong
                                class="fw-700">penghasilan</strong> & menggapai
                            <strong class="fw-700">mimpi</strong> bersama.
                        </h3>
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
@endsection

@push('scripts')
@endpush
