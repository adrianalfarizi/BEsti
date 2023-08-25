@extends('admin.partials.mainvolume')

@section('content_admin')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="orders-chart" data-colors='["--bs-success"]'> </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">3</span></h4>
                                        <p class="text-muted mb-0">Proyek</p>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="customers-chart" data-colors='["--bs-primary"]'> </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">4</span></h4>
                                        <p class="text-muted mb-0">Pengguna</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <!-- ======= Contact Section ======= -->
                                <section id="contact" class="contact">

                                    <div class="section-title" data-aos="zoom-out">
                                        <h2>Estimasi</h2>
                                        <p>Perhitungan Kasar</p>
                                    </div>



                                    <div class="col-lg-12" data-aos="fade-right">

                                    </div><br><br>
                                    <div class="d-flex justify-content-center">
                                        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                                            <form action="forms/contact.php" method="post" role="form"
                                                class="php-email-form">
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <input type="number" class="form-control" id="kasarpanjang"
                                                            placeholder="Panjang Bangunan" required>
                                                    </div>
                                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                                        <input type="number" class="form-control" id="kasarlebar"
                                                            placeholder="Lebar Bangunan" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="text-center"><button type="button"
                                                        onclick="hitungkasar()">Hitung</button></div><br>

                                                <br>
                                                <div class="form-group mt-3">
                                                    <div class="d-flex justify-content-center">
                                                        <h5>Estimasi Bangunan Anda Adalah</h5>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <h2><b id="hasilkasar"> </b></h2>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                            </div>
                            </section><!-- End Contact Section -->
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Foto Proyek</h4>
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="/assets/img/rumah1.jpg" width="360" height="350" alt="">

                                        </div>
                                        <div class="carousel-item">
                                            <img src="/assets/img/rumah1.jpg" width="360" height="350" alt="">

                                        </div>
                                        <div class="carousel-item">
                                            <img src="/assets/img/rumah1.jpg" width="360" height="350" alt="">

                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                                <!-- end table-responsive -->
                            </div>
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
