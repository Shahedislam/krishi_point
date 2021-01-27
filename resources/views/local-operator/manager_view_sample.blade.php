@extends('Agricuture-manager.Manager_homepage')
@section("content")

    <!-- end app-navbar -->
            <!-- begin app-main -->
            <div class="app-main" id="main">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin row -->
                    <div class="row">
                        <div class="col-md-12 m-b-30">
                            <!-- begin page title -->
                            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                    <h1>farmers crops info</h1>
                                </div>
                                <div class="ml-auto d-flex align-items-center">
                                    <nav>
                                        <ol class="breadcrumb p-0 m-b-0">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="ti ti-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                Tables
                                            </li>
                                            <li class="breadcrumb-item active text-primary" aria-current="page"></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- begin row -->
                    <div class="row editable-wrapper">
                        <div class="col-lg-12 ">
                            <div class="card card-statistics">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="table"
                                               class="table display responsive nowrap table-light table-bordered">
                                            <tr>
                                                <th>Farmers-name</th>
                                                <th>Farmers-ID</th>
                                                <th>Address</th>
                                                <th>Phone-no</th>
                                                <th>Test-name</th>
                                                <th>Crops-Name</th>
                                                <th>Payment-No</th>
                                                <th>Action</th>

                                            </tr>
                                            @foreach($crops_info as $crops)
                                            <tr>
                                             <td>{{$crops->NAME}}</td>
                                                <td>{{$crops->FARMER_ID}}
                                                <td>{{$crops->PHONE_NO}}</td>
                                                <td>{{$crops->ADDRESS}}</td>
                                                <td>{{$crops->test_name}}</td>
                                                <td>{{$crops->CROPS_NAME}}</td>
                                                <td>{{$crops->Payment_number}}</td>
                                                <td><a href='assigned/{{$crops->id}}' class="btn btn-warning">Make Report</a></td>
                                            </tr>
                                            @endforeach
                                            <tr>


                                                {{--<td>{{$soil_info->NAME}}</td>
                                                <td>{{$soil_info->FARMER_ID}}
                                                <td>{{$soil_info->PHONE_NO}}</td>
                                                <td>{{$soil_info->ADDRESS}}</td>
                                                <td>{{$soil_info->test_name}}</td>
                                                <td>{{$soil_info->SOIL_ID}}</td>
                                                <td>{{$soil_info->Payment_number}}</td>
--}}

                                            </tr>

                                            </thead>
                                            </tbody>

                                        </table>

                                        <div class="row">
                                            <div class="row-cols-3">



                                            </div>
                                        </div>
                                        <div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end app-main -->
        </div>
        <!-- end app-container -->
        <!-- begin footer -->
        <footer class="footer">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-left">
                    <p>&copy; Copyright 2019. All rights reserved.</p>
                </div>
                <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                    <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->

<!-- plugins -->
<script src="../assets/js/vendors.js"></script>

<!-- custom app -->
<script src="../assets/js/app.js"></script>
</body>

</html>

@endsection
