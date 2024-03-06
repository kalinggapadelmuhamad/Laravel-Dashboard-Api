@extends('layouts.app')

@section('title', 'Product')

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
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <div class="alert-title">Error</div>
                                    {{ $message }}
                                </div>
                            </div>
                        @elseif ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <div class="alert-title">Success</div>
                                    {{ $message }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Product</h4>
                            </div>
                            <div class="card-body">
                                <div class="p-2">
                                    <div class="float-left">
                                        <div class="section-header-button">
                                            <a href="{{ route('product.create') }}" class="btn btn-danger">Tambah</a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>

                                {{-- <div class="clearfix  divider mb-3"></div> --}}

                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    No
                                                </th>
                                                <th>Code</th>
                                                <th>Nama</th>
                                                <th>Tipe Barang</th>
                                                <th>Stock</th>
                                                <th>Satuan</th>
                                                <th>Harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $dataProduct)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $dataProduct['kodebarang'] }}
                                                    </td>
                                                    <td>
                                                        {{ $dataProduct['namabarang'] }}
                                                    </td>
                                                    <td>
                                                        {{ $dataProduct['typebarang'] }}
                                                    </td>
                                                    <td>
                                                        {{ $dataProduct['stockbarang'] }}
                                                    </td>
                                                    <td>
                                                        {{ $dataProduct['satuanbarang'] }}
                                                    </td>
                                                    <td>
                                                        Rp. {{ number_format($dataProduct['price']) }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('product.show', $dataProduct['id']) }}"
                                                            class="btn btn-sm btn-icon btn-primary m-1"><i
                                                                class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
