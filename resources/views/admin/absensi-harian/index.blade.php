@extends('admin.layout.app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Absensi</h4>
            </div>
           
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                            <h4>Absensi Harian</h4>
                        </div>
                        <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12 mb-2">
                            <div class="d-md-flex text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fas fa-plus"></i>&nbsp; Buat Absensi Harian
                                  </button>                                  
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 mt-2 mb-2">
                        @if (session('Success'))
                        <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                            <span><b>Success</b> {{session('Success')}}</span>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session('Successs'))
                        <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                            <span><b>Success</b> {{session('Successs')}}</span>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        
                        <div class="bd-example mt-4">
                            <div class="list-group w-40">
                                <div class="row">
                                @foreach ($absenharian as $item)
                                <div class="col-lg-4 mb-3">
                                    <a href="{{url('absensi/'.$item->id)}}" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Absensi Harian</h5>
                                            <small class="text-muted">{{$item->hari}}, {{date("d/M/Y", strtotime($item->hari_tgl));}}</small>
                                        </div>
                                        <p class="mb-1">Jam Masuk : {{$item->jam_masuk}}</p>
                                        <small class="text-muted">Jam Keluar{{$item->jam_keluar}}</small>
                                    </a>
                                </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2024 © Made With By SnapCLOCK 
        {{-- <a href="https://www.wrappixel.com/">wrappixel.com</a> --}}
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

<!-- Modal -->
    <form action="{{ url('/create-absensi') }}" method="POST">
        @csrf
        @method('POST') 
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Buat Absensi Harian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <label class="form-label" for="choices-single-default">Hari Absensi</label>
                        <select class="form-select" data-trigger name="hari" id="hari">
                            <option value="0">-</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputText1">Tanggal Absensi</label>
                        <input type="date" class="form-control" id="exampleInputText1" name="hari_tgl">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Jam Masuk</label>
                            <input type="time" class="form-control" id="exampleInputText1" name="jam_masuk">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Jam Keluar</label>
                            <input type="time" class="form-control" id="exampleInputText1" name="jam_keluar">
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary text-white">Simpan</button>
                </div>
            </div>
            </div>
        </div>
    </form>
@endsection