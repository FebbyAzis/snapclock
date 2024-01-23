@extends('admin.layout.app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Laporan Absensi</h4>
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
                            <h4>Tabel Data Absensi Hadir</h4>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 mt-2 mb-2">
                        <p>Berikut adalah tabel data absensi guru yang telah dinyatakan <b>"Hadir"</b> dalam aplikasi SnapCLOCK.</p>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">No</th>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Total Hadir</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <td></td>
                                <td><b>Total</b></td>
                                <td><b>{{$totalhadir}}</b></td>
                            </tfoot>
                            <tbody>
                                @foreach ($hadir as $no=>$item)
                                <tr>
                                    <td>{{$no+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                       
                    </div>
                </div>
                
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-lg-9 mt-2">
                            <h4>Tabel Data Absensi Sakit</h4>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 mt-2 mb-2">
                        <p>Berikut adalah tabel data absensi guru yang telah dinyatakan <b>"Sakit"</b> dalam aplikasi SnapCLOCK.</p>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">No</th>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Total Sakit</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <td></td>
                                <td><b>Total</b></td>
                                <td><b>{{$totalsakit}}</b></td>
                            </tfoot>
                            <tbody>
                                @foreach ($sakit as $no=>$item)
                                <tr>
                                    <td>{{$no+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                       
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-9 mt-2">
                                <h4>Tabel Data Absensi Izin</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="col-lg-12 mt-2 mb-2">
                            <p>Berikut adalah tabel data absensi guru yang telah dinyatakan <b>"Izin"</b> dalam aplikasi SnapCLOCK.</p>
                        </div>
    
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Nama</th>
                                        <th class="border-top-0">Total Izin</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <td></td>
                                    <td><b>Total</b></td>
                                    <td><b>{{$totalizin}}</b></td>
                                </tfoot>
                                <tbody>
                                    @foreach ($izin as $no=>$item)
                                    <tr>
                                        <td>{{$no+1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->total}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                           
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-lg-9 mt-2">
                                    <h4>Tabel Data Absensi Tanpa Keterangan/Alfa</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="col-lg-12 mt-2 mb-2">
                                <p>Berikut adalah tabel data absensi guru yang telah dinyatakan <b>"Tanpa Keterangan/Alfa"</b> dalam aplikasi SnapCLOCK.</p>
                            </div>
        
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">Total Tanpa Keterangan/Alfa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <td></td>
                                        <td><b>Total</b></td>
                                        <td><b>{{$totalalfa}}</b></td>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($alfa as $no=>$item)
                                        <tr>
                                            <td>{{$no+1}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->total}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                               
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="white-box">
                                <div class="row">
                                    <div class="col-lg-9 mt-2">
                                        <h4>Tabel Data Absensi Cuti</h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-lg-12 mt-2 mb-2">
                                    <p>Berikut adalah tabel data absensi guru yang telah dinyatakan <b>"Cuti"</b> dalam aplikasi SnapCLOCK.</p>
                                </div>
            
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No</th>
                                                <th class="border-top-0">Nama</th>
                                                <th class="border-top-0">Total Cuti</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <td></td>
                                            <td><b>Total</b></td>
                                            <td><b>{{$totalcuti}}</b></td>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($cuti as $no=>$item)
                                            <tr>
                                                <td>{{$no+1}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->total}}</td>
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