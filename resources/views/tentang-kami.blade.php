@extends('layout.mainlayout')
@section('title', 'Tentang Kami')

@section('content')
    <section id="tentang-kami-banner">
        <div class="banner" style="background-image: url('{{ asset('/img/gambar_menu/americano.jpg') }}')">
            <div class="content">
                <h1>Tentang Kami</h1>
                <p>Kodya Coffee, tempat terbaik untuk menikmati kopi berkualitas.</p>
            </div>
        </div>
    </section>

    <!-- Section: Tentang Kami -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src={{ url('img/tempat.jpeg') }} class="img-fluid rounded w-60" alt="Tentang Kami" />
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold">Siapa Kami?</h2>
                    <p>Kodya Coffee adalah coffee shop lokal yang berdedikasi untuk menghadirkan pengalaman terbaik bagi para pecinta kopi. Dengan biji kopi pilihan dan metode brewing yang beragam, kami
                        berkomitmen untuk menjaga kualitas dan cita rasa di setiap cangkir.</p>
                    <p>Kami percaya bahwa kopi bukan hanya sekadar minuman, melainkan seni dan budaya yang menyatukan banyak orang.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Barista Kami -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Barista Kami</h2>
            <div class="row g-4">
                <!-- Barista 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow">
                        <img src={{ url('img//alex.jpeg') }} class="card-img-top rounded-circle p-3 w-100" alt="Barista 1" />
                        <div class="card-body">
                            <h5 class="card-title">Alex</h5>
                            <p class="card-text">Barista berpengalaman yang ahli dalam seni latte art.</p>
                        </div>
                    </div>
                </div>
                <!-- Barista 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow">
                        <img src={{ url('img//bella.jpeg') }} class="card-img-top rounded-circle p-3 w-100" alt="Barista 2" />
                        <div class="card-body">
                            <h5 class="card-title">Bella</h5>
                            <p class="card-text">Spesialis kopi manual brew dengan lebih dari 5 tahun pengalaman.</p>
                        </div>
                    </div>
                </div>
                <!-- Barista 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow">
                        <img src={{ url('img//charlie.jpeg') }} class="card-img-top rounded-circle p-3 w-100" alt="Barista 3" />
                        <div class="card-body">
                            <h5 class="card-title">Charlie</h5>
                            <p class="card-text">Ahli dalam meracik minuman espresso-based dengan sentuhan inovatif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
