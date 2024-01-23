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
                            <h4>Tabel Data Guru</h4>
                        </div>
                        <div class="col-lg-3 text-end">
                            <a href="{{url('/tambah-guru')}}" class="btn btn-primary text-white">Tambah Guru</a>
                            {{-- <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Tambah Guru
                              </button>  --}}
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 mt-2 mb-2">
                        <p>Berikut adalah tabel data guru yang terdaftar didalam aplikasi SnapCLOCK.</p>
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
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">No</th>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">No Telepon</th>
                                    <th class="border-top-0">Alamat</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataguru as $no=>$item)
                                <tr>
                                    
                                        <td>{{$no+1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->no_tlp}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>
                                            <a href="{{route('data-guru.show', $item->id)}}" class="btn btn-info text-white">
                                                Lihat
                                            </a>

                                            <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$item->id}}">
                                                Edit
                                              </button> 

                                              <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{$item->id}}">
                                                Hapus
                                              </button> 
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

    <form action="{{ route('data-guru.store') }}" method="POST">
        @csrf
        @method('POST') 
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="choices-single-default">Pilih Pengguna</label>
                            <select class="form-select" data-trigger name="users_id" id="users_id">
                                <option value="0">-</option>
                                @foreach ($dataguru as $s)
                                @if ($s->id != 1)
                                    <option value="{{ $s->id }}" {{old('users_id') == $s->id ?  'selected' : null}}>{{ $s->name }}
                                    </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">No Telepon</label>
                            <input type="number" class="form-control" name="no_tlp">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
                        </div>

                </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary text-white">Tambah</button>
                </div>
            </div>
            </div>
        </div>
    </form>

    @foreach ($dataguru as $item)
    <form action="{{ url('edit-data-guru', $item->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <div class="modal fade" id="staticBackdrop1{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{$item->name}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$item->email}}" readonly>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">No Telepon</label>
                            <input type="text" class="form-control" name="no_tlp" value="{{$item->no_tlp}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3">{{$item->alamat}}</textarea>
                        </div>
                        
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
    @endforeach

    @foreach ($dataguru as $item)
    <form action="{{ url('hapus-guru', $item->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <div class="modal fade" id="staticBackdrop2{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Hapus Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Apakah anda yakin ingin menghapus pengguna <b>{{$item->name}}</b> sebagai guru?</p>
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
    @endforeach
@endsection