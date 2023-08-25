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
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead class="table-light ">
                                            <tr>
                                                <th style="width: 20px;">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>NO</th>
                                                <th>NAMA PEKERJAAN</th>
                                                <th>HARGA(Rp)</th>
                                                <th>SATUAN</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">1</a>
                                                </td>
                                                <td>Pekerja</td>
                                                <td>
                                                    Rp.600.000
                                                </td>
                                                <td>
                                                  Org/Hari
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light me-2">
                                                        <i class="uil-user"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-warning btn-sm btn-rounded waves-effect waves-light me-2">
                                                        <i class="uil-edit-alt "></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-dark btn-sm btn-rounded waves-effect waves-light me-2">
                                                        <i class="uil-trash-alt "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- end table-responsive -->
                                </div>
                                <!-- end table-responsive -->
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
