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
                        <h3>Profile</h3>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="proses_tambah_proyek.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-5">
                                    <label for="foto" class="form-label">Foto </label>
                                    <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama </label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                               
                                <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">alamat</label>
                                    <input type="teks" class="form-control" id="alamat" name="alamat" required>
                                </div>
                                <div class="mb-3">
                                    <label for="telepon" class="form-label">telepon</label>
                                    <input type="no" class="form-control" id="telepon" name="telepon" required>
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