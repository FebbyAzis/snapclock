@extends('admin.layout.app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4>
            </div>
           
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- PRODUCTS YEARLY SALES -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-3 mb-3">
                <div class="grey-box">
                    <div class="row">
                        <div class="col-md-12 mt-2 mb-2 text-center">
                                <h4><b>SELAMAT DATANG DI APLIKASI</b></h4>
                                <img src="{{asset('Assets/img/logo_transparent1.png')}}" width="10%">
                                <h3 class="text-secondary"><b>SnapCLOCK</b></h3>
                                <h4 class="mt-3"><b>MILIK</b></h4>
                                <h3><b>AKADEMI KEBIDANAN BUNDA AUNI</b></h3>
                                <img src="{{asset('Assets/img/logo3.png')}}" width="40%" class="mt-3">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- RECENT SALES -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Recent Comments -->
        <!-- ============================================================== -->
        
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
            href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
@endsection