@extends('layout.mainlayout')
@section('title', 'Tambah Menu')

@section('content')
    <div class="card card-primary m-5">
        <div class="card-header">
            <h3 class="card-title">Masukkan data</h3>
        </div>

        <form id="myForm" action="menu-store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_menu">Nama Menu</label>
                    <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="Masukkan Nama Menu">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="123...">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Singkat</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Jelaskan Secara singkat"></textarea>
                </div>
                <div class="form-group">
                    <label for="fotoInput">Masukkan Foto</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="foto" name="foto">
                        <label class="input-group-text" for="foto">Upload</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fileInput">Masukkan File</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="file" name="file">
                        <label class="input-group-text" for="file">Upload</label>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="/menu" role="button">Cancel</a>
            </div>
        </form>

        <script>
            function formatRibuan(num) {
                return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            function removeSeparator(numStr) {
                return numStr.replace(/\./g, ''); // Menghapus pemisah ribuan
            }

            // Fungsi untuk menghitung total secara otomatis
            function updateTotal() {
                var harga = document.getElementById('harga');

                // Hapus pemisah ribuan sebelum menghitung
                var harga = parseFloat(removeSeparator(harga.value)) || 0;
            }

            // Fungsi untuk memformat input 'pemasukan' saat pengguna mengetik
            document.getElementById('harga').addEventListener('input', function(e) {
                var value = e.target.value.replace(/\./g, ''); // Menghapus titik
                if (!isNaN(value) && value.length > 0) {
                    e.target.value = formatRibuan(value); // Format dengan pemisah ribuan
                } else {
                    e.target.value = ''; // Kosongkan jika input tidak valid
                }
            });

            // Ketika form disubmit, hapus semua pemisah ribuan
            document.getElementById('myForm').addEventListener('submit', function(e) {
                var harga = document.getElementById('harga');


                // Hapus pemisah ribuan sebelum pengiriman ke server
                harga.value = removeSeparator(harga.value);
            });
        </script>

    </div>
@endsection
