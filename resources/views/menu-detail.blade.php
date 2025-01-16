@extends('layout.mainlayout')
@section('title', 'Detail Menu')

@section('content')
    <section id="menu" class="py-5">
        <menu>
            <div class="d-flex justify-content-start mb-3">
                <a href="/menu" class="btn btn-secondary">See All Menus</a>
            </div>
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row">
                        <!-- Gambar Produk -->
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <img src="{{ asset($data->foto) }}" class="card-img-top" alt="{{ $data->nama_menu }}" />
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
                        </div>
                    </div>
                </div>
            </div>
        </menu>
    </section>
@endsection
