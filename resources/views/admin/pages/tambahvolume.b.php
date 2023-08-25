@extends('admin.partials.mainvolume')

@section('content_admin')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Koefisien Harga</h2>

                            <form action="proses_tambah_proyek.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="namaProyek" class="form-label">Nama Proyek</label>
                                    <input type="text" class="form-control" id="namaProyek" name="namaProyek" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggalPembuatan" class="form-label">Tanggal Pembuatan</label>
                                    <input type="date" class="form-control" id="tanggalPembuatan" name="tanggalPembuatan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lokasiProyek" class="form-label">Lokasi Proyek</label>
                                    <input type="text" class="form-control" id="lokasiProyek" name="lokasiProyek" required>
                                </div>
                                <div class="mb-3">
                                    <label for="fotoProyek" class="form-label">Foto Proyek</label>
                                    <input type="file" class="form-control" id="fotoProyek" name="fotoProyek" accept="image/*" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    {{-- footer --}}
</div>
<!-- end main content-->
@endsection