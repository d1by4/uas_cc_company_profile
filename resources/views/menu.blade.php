@extends('layout.mainlayout')
@section('title', 'Menu')

@section('content')
    <section id="menu-banner">
        <div class="banner" style="background-image: url('{{ asset('/img/menukopi.jpg') }}')">
            <div class="content">
                <h1>Menu</h1>
                <p>Menu terbaik yang kami sajikan ada disini</p>
            </div>
        </div>
    </section>
    <section id="menu" class="py-5">
        <menu>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-11">
                            <h4 class="text-center mb-4" style="cursor: default; color: rgb(0, 0, 0)">MENU</h4>
                            <div class="my-3 d-flex justify-content-between">
                                <a href="/menu-add" class="btn btn-primary">Add Menu</a>
                            </div>

                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body" style="height: 500px;">
                                    <table id="example1" class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Menu</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $menu)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $menu->nama_menu }}</td>
                                                    <td>{{ number_format($menu->harga, 2, ',', '.') }}</td>
                                                    <td>
                                                        <a href="menu-detail/{{ $menu->id }}" class="btn btn-success">Detail</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </menu>
    </section>
@endsection
