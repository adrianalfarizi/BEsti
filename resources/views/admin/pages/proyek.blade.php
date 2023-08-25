@extends('admin.partials.mainvolume')

@section('content_admin')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <nav class="navbar bg-light">
                    <div class="container-fluid mb-3">
                        <h4>Daftar Proyek</h4>
                        <a href="/tambahproyek" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Buat baru</a>

                    </div>
                </nav>

                <div class="row">
                    @foreach ($data_proyek as $view_proyek)
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="mt-4 ms-3">
                                    <h5 class="card-title">{{ $view_proyek->nama_proyek }}</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset("image_proyek/$view_proyek->foto_proyek") }}" width="220"
                                        height="220" alt="">
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-center">

                                        <a href="/proyek/{{ $view_proyek->id }}/edit" class="btn btn-warning"><i
                                                class="fa-regular fa-pen-to-square"></i>edit </a>
                                        <form action="/proyek/{{ $view_proyek->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-dark"
                                                onclick="return confirm('Yakin {{ $view_proyek->nama_proyek }} Dihapus? ');"><i
                                                    class="fa-solid fa-trash"></i>Hapus</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        {{-- footer --}}
    </div>
    <!-- end main content-->
@endsection
