@extends('admin.layout.app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Data Guru</h4>
            </div>
           
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-lg-9 mt-2">
                            <h4>Detail Data Guru <b>{{$dataguru->name}}</b></h4>
                        </div>
                        <div class="col-lg-3 text-end">
                        <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$dataguru->id}}">
                            Edit Data
                        </button>
                          
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 mt-2 mb-2">
                        <p>Berikut adalah detail data guru yang terdaftar didalam aplikasi SnapCLOCK.</p>
                    </div>
                    @if (session('Success'))
                        <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                            <span><b>Success</b> {{session('Success')}}</span>
                            <button type="button" class="btn-close btn-close-grey" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session('Successs'))
                        <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                            <span><b>Success</b> {{session('Successs')}}</span>
                            <button type="button" class="btn-close btn-close-grey" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <p>Nama</p>
                                <p>Email</p>
                                <p>No Telepon</p>
                                <p>Alamat</p>
                            </div>
                            <div class="col-lg-1 text-end">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>
                            <div class="col-lg-9">
                                <p><b>{{$dataguru->name}}</b></p>
                                <p><b>{{$dataguru->email}}</b></p>
                                <p><b>{{$dataguru->no_tlp}}</b></p>
                                <p><b>{{$dataguru->alamat}}</b></p>
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



    <form action="{{ url('edit-data-guru', $dataguru->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <div class="modal fade" id="staticBackdrop1{{$dataguru->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{$dataguru->name}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$dataguru->email}}" readonly>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">No Telepon</label>
                            <input type="text" class="form-control" name="no_tlp" value="{{$dataguru->no_tlp}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3">{{$dataguru->alamat}}</textarea>
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

    <form action="{{ url('hapus-guru', $dataguru->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <div class="modal fade" id="staticBackdrop2{{$dataguru->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Hapus Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Apakah anda yakin ingin menghapus pengguna <b>{{$dataguru->name}}</b> sebagai guru?</p>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary text-white">Ya</button>
                </div>
            </div>
            </div>
        </div>
    </form>
    
@endsection