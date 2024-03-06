@extends('layouts.app')

@section('title', 'Detail Product')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/d') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        {{-- @include('layouts.alert') --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Detail Product</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="{{ route('product.index') }}" class="">
                                                    <h4><i class="fa-solid fa-angle-left mr-2"></i>Kembali</h4>
                                                </a>
                                            </div>
                                            <div class="card-body ">

                                                <div class="row">
                                                    <div class="col-12 md-12 lg-12 text-center">
                                                        <img id="image-preview1"
                                                            src="{{ $detailProduct['image'] ? $detailProduct['image'] : asset('img/avatar/avatar-1.png') }}"
                                                            alt="Preview" class="img-fluid mb-3" style="height: 220px;">
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col col-md-4 col-lg-4">
                                                        <label for="name" class="form-label text-left">Slide 1</label>
                                                        <br>
                                                        <img id="image-preview2"
                                                            src="{{ $detailProduct['image2'] ? $detailProduct['image2'] : asset('img/avatar/avatar-1.png') }}"
                                                            alt="Preview" class="img-fluid mb-3" style="height: 140px;">
                                                    </div>

                                                    <div class="col col-md-4 col-lg-4">
                                                        <label for="name" class="form-label text-left">Slide 2</label>
                                                        <br>
                                                        <img id="image-preview3"
                                                            src="{{ $detailProduct['image3'] ? $detailProduct['image3'] : asset('img/avatar/avatar-1.png') }}"
                                                            alt="Preview" class="img-fluid mb-3" style="height: 140px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Detail Product</h4>
                                            </div>
                                            <div class="card-body">

                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Code</b>
                                                            </td>
                                                            <td>:
                                                                <?= $detailProduct['kodebarang'] ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Nama</b>
                                                            </td>
                                                            <td>:
                                                                <?= $detailProduct['namabarang'] ?> </td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Tipe</b>
                                                            </td>
                                                            <td>:
                                                                <?= $detailProduct['typebarang'] ?> </td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Deskripsi</b>
                                                            </td>
                                                            <td>:
                                                                <?= $detailProduct['deskripsibarang'] ?> </td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Stock</b>
                                                            </td>
                                                            <td>:
                                                                <?= $detailProduct['stockbarang'] ?> </td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Satuan</b>
                                                            </td>
                                                            <td>:
                                                                <?= $detailProduct['satuanbarang'] ?> </td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Harga</b>
                                                            </td>
                                                            <td>:
                                                                Rp. {{ number_format($detailProduct['price']) }}
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    {{-- <script src="{{ asset() }}"></script> --}}
    {{-- <script src="{{ asset() }}"></script> --}}
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
