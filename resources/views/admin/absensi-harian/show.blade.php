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
                            <h4>Detail Absensi Harian <b>{{date("d/M/Y", strtotime($absen->hari_tgl));}}</b></h4>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">No</th>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Tanggal</th>
                                    <th class="border-top-0">Jam Masuk Absensi</th>
                                    <th class="border-top-0">Jam Keluar Absensi</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Surat izin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($absenDetail as $no=>$item)
                                <tr>
                                    
                                        <td>{{$no+1}}</td>
                                        <td>{{$item->users->name}}</td>
                                        @if ($item->jam_masuk == null)
                                            <td>-</td>
                                        @else
                                            <td>{{$item->jam_masuk}}</td>
                                        @endif
                                        @if ($item->jam_keluar == null)
                                            <td>-</td>
                                        @else
                                            <td>{{$item->jam_keluar}}</td>
                                        @endif
                                        
                                        @if ($item->keterangan == 0)
                                            <td>Absensi sedang tahap proses</td>
                                        @elseif($item->keterangan == 1)
                                            <td>Hadir, Absensi telah selesai</td>
                                        @elseif($item->keterangan == 2)
                                            @if ($item->surat_izin == null)
                                                <td>Tidak Hadir, Alfa/Tanpa Keterangan</td>
                                            @else
                                                <td>Tidak Hadir, Sakit</td>
                                            @endif
                                        @elseif($item->keterangan == 3)
                                            @if ($item->surat_izin == null)
                                                <td>Tidak Hadir, Alfa/Tanpa Keterangan</td>
                                            @else
                                                <td>Tidak Hadir, Izin</td>
                                            @endif
                                        @elseif($item->keterangan == 4)
                                            <td>Tidak Hadir, Alfa/Tanpa Keterangan</td>
                                        @elseif($item->keterangan == 5)
                                            <td>Tidak Hadir, Cuti</td>
                                        @endif

                                        @if ($item->keterangan == 2)
                                            @if ($item->surat_izin == null)
                                                <td>-</td> 
                                            @else
                                                <td>
                                                    <img src="{{ url('/surat_izin/'.$item->surat_izin) }} " width="200px">
                                                </td>   
                                            @endif
                                        @elseif($item->keterangan == 3)
                                            @if ($item->surat_izin == null)
                                                <td>-</td>  
                                            @else
                                                <td>
                                                    <img src="{{ url('/surat_izin/'.$item->surat_izin) }} " width="200px">
                                                </td>    
                                            @endif
                                        @else
                                        <td>-</td>
                                        @endif
                                    


                                    
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


@endsection