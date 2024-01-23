@extends('user.layout.app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Absensi Detail</h4>
            </div>
            
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="row align-items-center mb-2">
                        <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                            <h4>Absensi Harian Detail</h4>
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
                                <div class="col-lg-6">
                                    <div class="col-lg-12 mb-2">
                                        <div class="row">
                                                <div class="col-lg-4">
                                                    <center>
                                                        <p>Tanggal Absensi</p>
                                                    </center>
                                                </div>
                                                <div class="col-lg-4">
                                                    <center>
                                                        <p>:</p>
                                                    </center>
                                                </div>
                                                <div class="col-lg-4">
                                                    <center>
                                                        <p><b>{{date("d/M/Y", strtotime($absenharian->hari_tgl));}}</b></p></p>
                                                    </center>
                                                </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="row">
                                                <div class="col-lg-4">
                                                    <center>
                                                        <p>Jam Masuk</p>
                                                    </center>
                                                </div>
                                                <div class="col-lg-4">
                                                    <center>
                                                        <p>:</p>
                                                    </center>
                                                </div>
                                                <div class="col-lg-4">
                                                    <center>
                                                        <p><b>{{$absenharian->jam_masuk}}</b></p></p>
                                                    </center>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <div class="row">
                                                <div class="col-lg-4">
                                                    <center>
                                                        <p>Jam Keluar</p>
                                                    </center>
                                                </div>
                                                <div class="col-lg-4">
                                                    <center>
                                                        <p>:</p>
                                                    </center>
                                                </div>
                                                <div class="col-lg-4">
                                                    <center>
                                                        <p><b>{{$absenharian->jam_keluar}}</b></p></p>
                                                    </center>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @if ($users)
                                            <div class="col-lg-12">
                                        <center>
                                            @if ($tombolAktif)
                                            <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                Masuk Sekarang
                                              </button> 
                                            @else
                                            <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop" disabled>
                                                Masuk Sekarang
                                              </button> 
                                            @endif
                                        </center>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        @if ($tombol == null)
                                        <center>
                                            <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                Tidak Bisa Hadir
                                            </button>   
                                        </center>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        @if ($tombol == null)
                                        <center>
                                            <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                                Alfa/Tanpa Keterangan
                                            </button>   
                                        </center>
                                        @endif
                                    </div>
                                    @else
                                    <center>
                                        <p class="bg-danger text-white">Anda tidak bisa melakukan Absensi karena anda belum terdaftar sebagai Guru, Harap hubungi pihak Admin 
                                            Aplikasi untuk mendaftarkan anda sebagai Guru pada Aplikasi SnapCLOCK!</p>
                                    </center>
                                    @endif
                                    
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="row align-items-center mb-2">
                        <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                            <h4>Status Absensi</b></h4>
                        </div>
                    </div>
                    <hr>
                    @foreach ($absendetail as $item)
                    <div class="col-lg-12 mt-2 mb-2">   
                        <div class="row">
                            <div class="col-lg-2 mb-2">
                                <p>Nama</p>
                                <p>Tanggal Absensi</p>
                                <p>Jam Masuk Absensi</p>
                                <p>Jam Keluar Absensi</p>
                                <p>Status</p>
                            </div>
                            <div class="col-lg-1 mb-2 text-end">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>
                            <div class="col-lg-9 mb-2">
                                <p><b>{{$item->users->name}}</b></p>
                                <p><b>{{date("d/M/Y", strtotime($item->jadwal_absensi->hari_tgl));}}</b></p>
                                @if ($item->jam_masuk == null)
                                    <p><b>-</b></p>
                                @else
                                    <p><b>{{$item->jam_masuk}}</b></p>
                                @endif
                                @if ($item->jam_keluar == null)
                                    <p><b>-</b></p>
                                @else
                                    <p><b>{{$item->jam_keluar}}</b></p>
                                @endif
                                @if ($item->keterangan == 0)
                                    <p><b>Absensi sedang tahap proses</b></p>
                                @elseif($item->keterangan == 1)
                                    <p><b>Hadir, Absensi telah selesai</b></p>
                                @elseif($item->keterangan == 2)
                                    @if ($item->surat_izin == null)
                                        <p><b>Permohonan ketidakhadiran anda disebabkan Sakit ditolak dan anda dinyatakan 
                                            Tidak Hadir, Alfa/Tanpa Keterangan. dikarenakan
                                            anda tidak menyertakan surat keterangan Sakit dari dokter</b></p>
                                    @else
                                        <p><b>Tidak Hadir, Sakit</b></p>
                                    @endif
                                @elseif($item->keterangan == 3)
                                    @if ($item->surat_izin == null)
                                        <p><b>Permohonan ketidakhadiran anda disebabkan Izin ditolak dan anda dinyatakan 
                                            Tidak Hadir, Alfa/Tanpa Keterangan., dikarenakan
                                            anda tidak menyertakan surat keterangan Izin ketidakhadiran</b></p>
                                    @else
                                        <p><b>Tidak Hadir, Izin</b></p>
                                    @endif
                                @elseif($item->keterangan == 4)
                                    <p><b>Tidak Hadir, Alfa/Tanpa Keterangan</b></p>
                                    @elseif($item->keterangan == 5)
                                    <p><b>Tidak Hadir, Cuti</b></p>
                                @endif
                            </div>
                            @if ($item->keterangan == 2)
                                @if ($item->surat_izin == null)
                                    <div class="col-lg-2 mb-2">
                                        <p>Surat Izin</p>
                                    </div>
                                    <div class="col-lg-1 mb-2 text-end">
                                        <p>:</p>
                                    </div>
                                    <div class="col-lg-9 mb-2">
                                        <p><b>-</b></p>
                                    </div> 
                                @else
                                    <div class="col-lg-2 mb-2">
                                        <p>Surat Izin</p>
                                    </div>
                                    <div class="col-lg-1 mb-2 text-end">
                                        <p>:</p>
                                    </div>
                                    <div class="col-lg-9 mb-2">
                                        <img src="{{ url('/surat_izin/'.$item->surat_izin) }} " width="200px">
                                    </div>    
                                @endif
                            @elseif($item->keterangan == 3)
                                @if ($item->surat_izin == null)
                                    <div class="col-lg-2 mb-2">
                                        <p>Surat Izin</p>
                                    </div>
                                    <div class="col-lg-1 mb-2 text-end">
                                        <p>:</p>
                                    </div>
                                    <div class="col-lg-9 mb-2">
                                        <p><b>-</b></p>
                                    </div>    
                                @else
                                    <div class="col-lg-2 mb-2">
                                        <p>Surat Izin</p>
                                    </div>
                                    <div class="col-lg-1 mb-2 text-end">
                                        <p>:</p>
                                    </div>
                                    <div class="col-lg-9 mb-2">
                                        <img src="{{ url('/surat_izin/'.$item->surat_izin) }} " width="200px">
                                    </div>    
                                @endif
                            @endif
                            
                            <center>
                                @if ($item->keterangan == 0)
                                    @if ($now->greaterThanOrEqualTo($waktuJamKeluar))
                                    <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{$item->id}}">
                                        Keluar Absensi
                                    </button> 
                                    @else
                                    <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{$item->id}}" disabled>
                                        Keluar Absensi
                                    </button> 
                                    @endif
                                @endif
                            </center>
                        </div> 
                        
                    </div>
                    @endforeach
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
    <form action="{{ url('/create-absen-guru') }}" method="POST">
        @csrf
        @method('POST') 
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Absensi Harian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="jadwal_absensi_id" value="{{$absenharian->id}}">
                    <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                        <label class="form-label" for="exampleInputText1">Tanggal Absensi</label>
                        <input type="text" class="form-control" id="exampleInputText1" value="{{date("d/M/Y", strtotime($absenharian->hari_tgl));}}" readonly>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Jam Masuk</label>
                            <input type="text" class="form-control" id="exampleInputText1" name="jam_masuk" value="{{date("H:i:s", strtotime($now));}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Jam Keluar</label>
                            <input type="text" class="form-control" id="exampleInputText1" value="{{$absenharian->jam_keluar}}">
                        </div>
                    </div>
                    <input type="hidden" name="keterangan" value="0">
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary text-white">Lanjutkan</button>
                </div>
            </div>
            </div>
        </div>
    </form>

    <form action="{{ url('/keterangan-ketidakhadiran') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST') 
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Absensi Harian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="col-lg-12 mt-2 mb-2">
                
                    <input type="hidden" name="jadwal_absensi_id" value="{{$absenharian->id}}">
                    <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
        
                    <select class="form-select" aria-label="Default select example" name="keterangan">
                        <option selected>Pilih keterangan tidak hadir</option>
                        <option value="2">Sakit</option>
                        <option value="3">Izin</option>
                        <option value="4">Alfa/Tanpa Keterangan</option>
                        <option value="5">Cuti</option>
                      </select>
                
                      <div class="col-lg-12 mt-3 mb-2">
                        <p><b>Catatan : Jika keterangan Sakit/Izin tanpa disertai dengan surat keterangan sakit dari dokter/surat izin 
                            ketidakhadiran, maka permohonan anda akan ditolak dan akan dinyatakan Tidak Hadir, Alfa/Tanpa Keterangan</b></p>

                        <div class="form-group">
                                <Label>Surat Izin :</Label>
                                <input type="file" class="form-control" name="surat_izin" value="0">
                        </div>
                      </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary text-white">Lanjutkan</button>
                </div>
            </div>
            </div>
        </div>
    </form>

    @foreach ($absendetail as $item)
    <form action="{{ url('keluar-absensi/'. $item->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <div class="modal fade" id="staticBackdrop2{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Keluar Absensi Harian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 mt-2 mb-2">
                    
                    <p>Apakah anda yakin ingin keluar dari absensi hari ini?</p>
                    
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