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
                {{-- pekerjaan --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5>I.Pekerjaan Persiapan</h5>
                                </div>
                                <div class="mb-2">
                                    <label for="persiapan" class="form-label">1.Pekerjaan Persiapan</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="persiapanPanjang"
                                                placeholder="Panjang">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="PersiapanLebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="bowplank" class="form-label">2.Pemasangan Bowplank</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="bowplankpanjang"
                                                placeholder="Panjang">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="bowplanklebar"
                                                placeholder="Lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="air" class="form-label">3.Penyediaan Air</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="air" placeholder="Panjang"
                                                disabled>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="air" placeholder="Lebar"
                                                disabled>
                                        </div>
                                        <div class="col-lg-2">
                                            <p>1</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="document" class="form-label">4.Administrasi & Document</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="document" placeholder="Panjang"
                                                disabled>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="document" placeholder="Lebar"
                                                disabled>
                                        </div>
                                        <div class="col-lg-2">
                                            <p>1</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- endpekerjaan --}}
                {{-- pekerjaan --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5>II.Pekerjaan Galian Tanah dan Urugan</h5>
                                </div>
                                <div class="mb-2">
                                    <label for="galian" class="form-label">1.Pekerjaan Galian Tanah Pondasi</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="galianPanjang"
                                                placeholder="Panjang total">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="galianLebar" placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="galianTinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="tanahkembali" class="form-label">2.Urugan Tanah Kembali</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="tanahkembalipanjang"
                                                placeholder="1/4" disabled>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="tanahkembalivolume"
                                                placeholder="volume Pondasi">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="pasirpondasi" class="form-label">3.Urugan Pasir Dibawah Pondasi</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="pasirpondasipanjang"
                                                placeholder="Panjang">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="pasirpondasilebar"
                                                placeholder="Lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="pasirpondasitinggi"
                                                placeholder="Tinggi">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="pasirlantai" class="form-label">4.Urugan Pasir Dibawah lantai</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="pasirlantaipanjang"
                                                placeholder="Panjang">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="pasirlantailebar"
                                                placeholder="Lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="pasirlantaitinggi"
                                                placeholder="Tinggi">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- endpekerjaan --}}
                {{-- pekerjaan --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5>III.Pekerjaan Pasangan Dan Plesteran</h5>
                                </div>
                                <div class="mb-2">
                                    <label for="batukosong" class="form-label">1.Pasangan Batu Kosong</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="batukosongPanjang"
                                                placeholder="Panjang total">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="batukosongLebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="batukosongTinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="batukali" class="form-label">2.Pasangan Batu Karang/Kali</label>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="batukalipanjang"
                                                placeholder="panjang">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="batukalipanjang"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="batukalila"
                                                placeholder="leba ratas">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="batukalilb"
                                                placeholder="lebar bawah">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="tembokbiasa" class="form-label">3.Pasangan Tembok Biasa</label><br>
                                    <label for="tembokbiasa" class="form-label ms-3">a.Pasangan kusen</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="kusenpanjang"
                                                placeholder="Panjang">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="kusenlebar"
                                                placeholder="Lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="kusenjumlah"
                                                placeholder="jumlah">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="tembok" class="form-label ms-3">b.Pasangan Tembok</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="tembokpanjang"
                                                placeholder="Panjang">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="temboklebar"
                                                placeholder="Lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="gewel" class="form-label ms-3">C.Gewel</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="gewelpanjang"
                                                placeholder="Panjang">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="geweltinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="plesteran" class="form-label">4.Plesteran Tembok Biasa</label><br>
                                    <label for="plesteran" class="form-label ms-3">a.pasangan Tembok</label>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <input type="number" class="form-control" id="plesteranluas"
                                                placeholder="luas Pasangan Tembok">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="plesteran" class="form-label ms-3">b.pasangan gewel</label>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <input type="number" class="form-control" id="plesteranluas"
                                                placeholder="luas Pasangan gewel">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="plesteran" class="form-label">TOTAL PEMASANGAN TEMBOK</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="hasiltembok"
                                                placeholder="hasil pemasangan tembok">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="hasilgewel"
                                                placeholder="hasil Pasangan gewel">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="tepiluar" class="form-label">5.Plesteran Pondasi Tepi Luar</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="tepiluarpanjang"
                                                placeholder="Panjang">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="tepiluartinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="tepiluar" class="form-label">6.Plesteran Beton Campuran</label><br>
                                    <label for="tepiluar" class="form-label ms-3">a.Kolom Teras</label>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="tepiluarjumlah"
                                                placeholder="jumlah">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="tepiluarlebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="tepiluartinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="tepiluartebal"
                                                placeholder="tebal">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="terasdepan" class="form-label ms-3">b.beton teras depan</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="terasdepanpanjang"
                                                placeholder="panjang">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="terasdepanlebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="terasbelakang" class="form-label ms-3">c.beton teras belakang</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="terasbelakangpanjang"
                                                placeholder="panjang">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="terasbelakanglebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="konsol" class="form-label ms-3">d.Konsol</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="konsolpanjang"
                                                placeholder="panjang">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="konsollebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="acian" class="form-label">7.acian Tembok</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="aciantotalplesteran"
                                                placeholder="totalplesteran">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="acianpondasitepiluar"
                                                placeholder="pondasitepiluar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="acianplesteranbeton"
                                                placeholder="plesteranbeton">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- endpekerjaan --}}

                {{-- pekerjaan --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5>IV.PEKERJAAN BETON</h5>
                                </div>
                                <div class="mb-2">
                                    <label for="sloof" class="form-label">1.Cor Beton Sloof</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="sloofPanjang"
                                                placeholder="Panjang total">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="sloofLebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="sloofTinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label for="praktis" class="form-label">2.Kolom Praktis</label>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control" id="praktispanjang"
                                                    placeholder="Panjang">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control" id="praktislebar"
                                                    placeholder="Lebar">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="praktistinggi"
                                                    placeholder="Tinggi">
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Hasil</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" class="btn btn-dark">Hitung</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- endpekerjaan --}}

                {{-- pekerjaan --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5>V.PEKERJAAN ATAP & PLAVOND</h5>
                                </div>
                                <div class="mb-2">
                                    <label for="kuda" class="form-label">1.Pasangan Kuda-Kuda</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="kudaPanjang"
                                                placeholder="Panjang total">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="kudaLebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="kudatebal"
                                                placeholder="tebal">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="mb-2">
                                        <label for="gording" class="form-label">2.Pasangan Gording</label>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="gordingpanjang"
                                                    placeholder="Panjang">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="gordinglebar"
                                                    placeholder="Lebar">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="gordingtinggi"
                                                    placeholder="Tinggi">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="gordingjumlah"
                                                    placeholder="jumlah">
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Hasil</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" class="btn btn-dark">Hitung</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label for="penahan" class="form-label">3.Pasangan Kloos Penahan</label>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="penahanpanjang"
                                                    placeholder="Panjang">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="penahanlebar"
                                                    placeholder="Lebar">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="penahantinggi"
                                                    placeholder="Tinggi">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="penahanjumlah"
                                                    placeholder="jumlah">
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Hasil</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" class="btn btn-dark">Hitung</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label for="penahan gording" class="form-label">4.Balok Penahan gording
                                            gording</label>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control" id="penahangordingpanjang"
                                                    placeholder="Panjang">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control" id="penahangordinglebar"
                                                    placeholder="Lebar">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="number" class="form-control" id="penahangordingtinggi"
                                                    placeholder="Tinggi">
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Hasil</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" class="btn btn-dark">Hitung</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label for="listplank" class="form-label">5.Pekerjaan Listplank</label>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="listplankluas"
                                                    placeholder="Luas Bangunan">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="listplankpanjang"
                                                    placeholder="panjang listplank" disabled>
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Hasil</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" class="btn btn-dark">Hitung</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label for="atap" class="form-label">6.Pekerjaan Atap Seng </label>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="atappanjang"
                                                    placeholder="panjang ">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="ataplebar"
                                                    placeholder="lebar">
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Hasil</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" class="btn btn-dark">Hitung</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label for="atap" class="form-label">7.Pekerjaan Plafon</label>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="luasbangunan"
                                                    placeholder="Luas  ">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="ataplebar"
                                                    placeholder="lebar">
                                            </div>
                                            <div class="col-lg-2">
                                                <p>Hasil</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="submit" class="btn btn-dark">Hitung</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                {{-- endpekerjaan --}}

                {{-- pekerjaan --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5>VI.Pekerjaan Kusen Pintu Dan Jendela</h5>
                                </div>

                                <div class="mb-2">
                                    <label for="pintu" class="form-label">1.Kusen Pintu</label>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="pintuPanjang"
                                                placeholder="Panjang total">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="pintuLebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="pintutebal"
                                                placeholder="tebal">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="pintujumlah"
                                                placeholder="jumlah">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="jendela" class="form-label">2.Kusen jendela</label>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="jendelaPanjang"
                                                placeholder="Panjang total">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="jendelaLebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="jendelatebal"
                                                placeholder="tebal">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="jendelajumlah"
                                                placeholder="jumlah">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="daunjendela" class="form-label">3.Daun jendela</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="daunjendelatinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="daunjendelalebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="daunjendelajumlah"
                                                placeholder="jumlah">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="daunpintu" class="form-label">4.Daun pintu</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="daunpintutinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="daunpintulebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="daunpintujumlah"
                                                placeholder="jumlah">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                {{-- endpekerjaan --}}

                {{-- pekerjaan --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h5>VII.Pekerjaan Lantai Dan Keramik</h5>
                                </div>
                                <div class="mb-2">
                                    <label for="keramik" class="form-label">1.Pasangan Keramik</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="keramikbangunan"
                                                placeholder="luas Bangunan">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="keramikkeramik"
                                                placeholder="luas Keramik">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="rabat" class="form-label">2.Rabat Beton</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="keramikbangunan"
                                                placeholder="luas Bangunan">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="keramikkeramik"
                                                placeholder="luas Keramik">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="mb-2">
                                    <label for="daunjendela" class="form-label">3.Daun jendela</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="daunjendelatinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="daunjendelalebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="daunjendelajumlah"
                                                placeholder="jumlah">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="daunpintu" class="form-label">4.Daun pintu</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="daunpintutinggi"
                                                placeholder="tinggi">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" class="form-control" id="daunpintulebar"
                                                placeholder="lebar">
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="number" class="form-control" id="daunpintujumlah"
                                                placeholder="jumlah">
                                        </div>
                                        <div class="col-lg-2">
                                            <p>Hasil</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-dark">Hitung</button>
                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                {{-- endpekerjaan --}}

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        {{-- footer --}}
    </div>
    <!-- end main content-->
@endsection
