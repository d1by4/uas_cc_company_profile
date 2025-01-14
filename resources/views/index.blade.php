@extends('layout.mainlayout')
@section('title', 'Home')

@section('content')
    <!-- banner -->
    <section id="banner">
        <header class="hero-banner">
            <div class="hero-content">
                <h1 class="display-3 fw-bold">Bersantai Sambil Menikmati Kodya Coffee</h1>
                <div class="mt-4">
                    <a href="#about" class="btn btn-outline-light btn-lg">Learn More</a>
                </div>
            </div>
        </header>
    </section>
    <!-- end-banner -->

    <!-- About & Proccess -->
    <section id="about" style="padding-top: 5rem">
        <div class="container-fluid">
            <div class="container" style="border-radius: 30px">
                <h2 class="text-center text-dark" style="cursor: default">Tentang Kami</h2>
                <p class="text-center" style="font-size: 18px">Kodya Coffee adalah coffee shop yang menghadirkan pengalaman minum kopi berkualitas tinggi dalam suasana yang nyaman dan hangat. Dengan biji
                    kopi pilihan dari petani lokal dan racikan barista berpengalaman, Kodya Coffee menjadi tempat ideal untuk menikmati cita rasa autentik kopi Indonesia, baik untuk bersantai sendiri,
                    bertemu teman, atau bekerja. Di sini, setiap cangkir memiliki cerita, dan setiap kunjungan memberikan kehangatan baru.</p>
            </div>
            <div style="display: flex; justify-content: center; align-items: center; height: 300px; padding-top: 100px">
                <img src={{ url('/img/coffee.png') }} alt="Arabica Coffee" style="max-width: 100%; height: auto" />
            </div>
        </div>
    </section>
    <!-- end-about -->

    <section id="highlight">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src={{ url('img/gambar_menu/americano.jpg') }} class="d-block w-100" alt="Americano" />
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src={{ url('img/gambar_menu/kopi-tarik.jpg') }} class="d-block w-100" alt="Latte" />
                </div>
                <div class="carousel-item">
                    <img src={{ url('img/gambar_menu/capuccino.jpg') }} class="d-block w-100" alt="Cappuccino" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- promo -->
    <section id="promo" style="padding: 5rem 0rem 5rem 0rem">
        <div class="container-fluid">
            <div class="container" style="border-radius: 30px">
                <h2 class="text-center text-dark" style="cursor: default">Terlaris</h2>

                <div class="row mt-5 justify-content-center">
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <img src={{ url('img/gambar_menu/Arabica-coffe.jpeg') }} class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title" style="cursor: default">Kopi Arabica</h5>
                                <p class="card-text" style="cursor: default">Kopi premium yang dikenal dengan rasa halus dan aroma yang kaya dan memiliki keasaman yang seimbang.</p>
                                <a href="detail-coffee.html" style="text-decoration: none">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-secondary w-100" type="button">Detail</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <img src={{ url('img/gambar_menu/coldbrewcoffe.jpeg') }} class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title" style="cursor: default">Cold Brew</h5>
                                <p class="card-text" style="cursor: default">Cold Brew adalah kopi yang diseduh dengan air dingin untuk rasa halus dan kurang asam.</p>
                                <a href="detail-coffee.html" style="text-decoration: none">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-secondary w-100" type="button">Detail</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <img src={{ url('img/gambar_menu/cuban-expresso-coffe.jpeg') }} class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title" style="cursor: default">Cuban Espresso</h5>
                                <p class="card-text" style="cursor: default">Cuban Espresso adalah kopi kuat dan pekat dengan rasa sedikit pahit dan manis dari gula yang dicampurkan.</p>
                                <a href="detail-coffee.html" style="text-decoration: none">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-secondary w-100" type="button">Detail</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end-promo -->
@endsection
