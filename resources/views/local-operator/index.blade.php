@extends('local-operator.style')
@section("content")
    <!-- Notification -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">

            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-statistics">
                        <div class="row no-gutters">
                            <div class="col-xxl-3 col-lg-6">
                                <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                                    <div class="d-flex m-b-10">
                                        <p class="mb-0 font-regular text-muted font-weight-bold">Soil Registered</p>
                                        <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                    </div>
                                    <div class="d-block d-sm-flex h-100 align-items-center">
                                        <div class="apexchart-wrapper">
                                            <div id="analytics7"></div>
                                        </div>
                                        <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                            <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>{{$dash3}}</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6">
                                <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                                    <div class="d-flex m-b-10">
                                        <p class="mb-0 font-regular text-muted font-weight-bold">Crops Registered</p>
                                        <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                    </div>
                                    <div class="d-block d-sm-flex h-100 align-items-center">
                                        <div class="apexchart-wrapper">
                                            <div id="analytics8"></div>
                                        </div>
                                        <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                            <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>{{$dash2}}</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6">
                                <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                                    <div class="d-flex m-b-10">
                                        <p class="mb-0 font-regular text-muted font-weight-bold">Total Payments</p>
                                        <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                    </div>
                                    <div class="d-block d-sm-flex h-100 align-items-center">
                                        <div class="apexchart-wrapper">
                                            <div id="analytics9"></div>
                                        </div>
                                        <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                            <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>{{$dash}}</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-3 col-lg-6">
                                <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                                    <div class="d-flex m-b-10">
                                        <p class="mb-0 font-regular text-muted font-weight-bold">Total Reports</p>
                                        <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                    </div>
                                    <div class="d-block d-sm-flex h-100 align-items-center">
                                        <div class="apexchart-wrapper">
                                            <div id="analytics8"></div>
                                        </div>
                                        <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                            <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>{{$dash4}}</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>


            </div>







            <!-- plugins -->
            <script src="assets/js/vendors.js"></script>

            <!-- custom app -->
            <script src="assets/js/app.js"></script>

@endsection
