@extends('layouts.app')

@section('title', 'Detail Users')

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
                                <h4>Detail Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="{{ route('user.index') }}" class="">
                                                    <h4><i class="fa-solid fa-angle-left mr-2"></i>Kembali</h4>
                                                </a>
                                            </div>
                                            <div class="card-body ">

                                                <div class="row">
                                                    <div class="col-12 md-12 lg-12 text-center">
                                                        <img id="image-preview1"
                                                            src="{{ $users['image_profile'] ? $users['image_profile'] : asset('img/avatar/avatar-1.png') }}"
                                                            alt="Preview" class="img-fluid mb-3" style="height: 220px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Detail Users</h4>
                                            </div>
                                            <div class="card-body">

                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Name</b>
                                                            </td>
                                                            <td>:
                                                                <?= $users['name'] ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Email</b>
                                                            </td>
                                                            <td>:
                                                                <?= $users['email'] ?> </td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Phone</b>
                                                            </td>
                                                            <td>:
                                                                <?= $users['phone'] ?> </td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 150px">
                                                                <b>Created At</b>
                                                            </td>
                                                            <td>:
                                                                <?= $users['createdAt'] ?> </td>
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
