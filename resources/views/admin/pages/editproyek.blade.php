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
                            <h3>Edit Proyek</h3>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <form action="/proyek/{{ $proyek->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="namaProyek" class="form-label">Nama Proyek</label>
                                        <input type="text" class="form-control" id="namaProyek" name="nama_proyek"
                                            value="{{ $proyek->nama_proyek }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggalPembuatan" class="form-label">Tanggal Pembuatan</label>
                                        <input type="date" class="form-control" id="tanggalPembuatan"
                                            name="tanggal_pembuatan" value="{{ $proyek->tanggal_pembuatan }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lokasiProyek" class="form-label">Lokasi Proyek</label>
                                        <input type="text" class="form-control" id="lokasiProyek" name="lokasi_proyek"
                                            value="{{ $proyek->lokasi_proyek }}">
                                    </div>
                                    <div class="mb-5">
                                        <label for="fotoProyek" class="form-label">Foto Proyek</label>
                                        <br>
                                        @if ($proyek->foto_proyek)
                                            <img src="{{ asset("image_proyek/$proyek->foto_proyek") }}"
                                                width="60"alt="">
                                            <input type="file" class="form-control" id="fotoProyek" name="foto_proyek">
                                        @else
                                            <span>Tidak ada gambar sebelumnya</span>
                                            <input type="file" class="form-control" id="fotoProyek" name="foto_proyek">
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-dark">Simpan</button>
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
