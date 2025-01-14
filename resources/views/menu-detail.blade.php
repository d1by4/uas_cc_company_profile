@extends('layout.mainlayout')
@section('title', 'Detail Menu')

@section('content')
    <section id="menu" class="py-5">
        <menu>
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row">
                        <!-- Gambar Produk -->
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <img src="gambar/Arabica coffe.jpeg" class="card-img-top" alt="{{ $data->nama_menu }}" />
                            </div>
                        </div>

                        <!-- Detail Produk -->
                        <div class="col-lg-7 offset-lg-1">
                            <h1 style="cursor: default">{{ $data->nama_menu }}</h1>
                            <h2 class="text-success" style="cursor: default">
                                Rp {{ number_format($data->harga, 2, ',', '.') }}
                            </h2>
                            <p class="mt-4">
                                {{ $data->deskripsi }}
                            </p>
                            <div class="d-flex align-items-center mt-4">
                                {{-- @if (file_exists($pdfPath)) --}}
                                <a href="" class="btn btn-primary me-3" target="_blank" rel="noopener noreferrer">Lihat Resep Lengkap</a>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </menu>
    </section>

    <section id="other-menu" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Other Menu</h2>
                </div>
                <div class="col-md-6 text-end">
                    <a href="/menu" class="btn btn-secondary">See All Menus</a>
                </div>
            </div>
            <div class="row">
                {{-- @foreach ($menus as $menu) --}}
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <p class="text-success fw-bold">Rp </p>
                            <a href="/menu/" class="btn btn-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </section>
@endsection
