@extends('layouts.app')

@section('title', ' Create Product')

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
                            <form method="POST" action="{{ route('product.store') }}">
                                @csrf
                                <div class="card-header">
                                    <h4>Default Validation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Code Barang</label>
                                                <input type="text" class="form-control" required="" name="codeBarang">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nama Barang</label>
                                                <input type="text" class="form-control" required="" name="namaBarang">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tipe Barang</label>
                                                <input type="text" class="form-control" required="" name="tipeBarang">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Image 1</label>
                                                <input type="text" class="form-control" name="image1" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Image 2</label>
                                                <input type="text" class="form-control" name="image2" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Image 3</label>
                                                <input type="text" class="form-control" name="image3" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Stock Barang</label>
                                                <input type="number" class="form-control" name="stock" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Harga Barang</label>
                                                <input type="number" class="form-control" name="price" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label>Deskripsi</label>
                                        <textarea class="form-control" required="" name="deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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
