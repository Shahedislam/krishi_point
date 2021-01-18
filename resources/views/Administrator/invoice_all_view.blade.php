@extends('Administrator.admin')
@section("content")
<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">

        <!-- end row --><div class="col-sm-12 col-lg-12 col-xxl-12 mb-30">
            <div class="card card-statistics">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="card-title text-center">Soil Sample</h4>
                    </div>
                </div>
                <!-- begin row -->
                <div class="row editable-wrapper">
                    <div class="col-lg-12 ">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table" class="table display responsive nowrap table-light table-bordered">
                                        <tr>
                                            <th>Farmers-name</th>
                                            <th>Farmers-ID</th>
                                            <th>Address</th>
                                            <th>Phone-no</th>
                                            <th>Test-name</th>
                                            <th>Soil-ID</th>
                                            <th>Payment-No</th>
                                            <th>Payment Amount</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($invoice as $soil)
                                            <tr>
                                                <td>{{$soil->NAME}}</td>
                                                <td>{{$soil->FARMER_ID}}</td>
                                                <td>{{$soil->ADDRESS}}</td>
                                                <td>{{$soil->PHONE_NO}}</td>
                                                <td>{{$soil->test_name}}</td>
                                                <td>{{$soil->SOIL_ID}}</td>
                                                <td>{{$soil->Payment_number}}</td>
                                                <td>{{$soil->total_price}}</td>
                                                <td><a href='/{{$soil->id}}' class="btn btn-warning">View Details</a></td>

                                            </tr>
                                            @endforeach
                                            </thead>
                                            </tbody>

                                    </table>
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

    <!-- end app-wrap -->

    <!-- end app -->

    <!-- plugins -->

@endsection

