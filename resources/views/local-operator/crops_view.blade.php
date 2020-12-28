@extends('local-operator.style')
@section("content")
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">



        <!-- end row --><div class="col-sm-12 col-lg-12 col-xxl-12 mb-30">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title text-center">Crops Sample</h4>
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
                                                <th>Crops-name</th>
                                                <th>Soil-ID</th>
                                                <th>Payment-No</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach($crops_info as $crops)
                                                <tr>
                                                    <td>{{$crops->NAME}}</td>
                                                    <td>{{$crops->FARMER_ID}}</td>
                                                    <td>{{$crops->ADDRESS}}</td>
                                                    <td>{{$crops->PHONE_NO}}</td>
                                                    <td>{{$crops->CROPS_NAME}}</td>
                                                    <td>{{$crops->test_name}}</td>
                                                    <td>{{$crops->CROPS_ID}}</td>
                                                    <td>{{$crops->Payment_number}}</td>
                                                    <td><a href='assign/{{$crops->id}}' class="btn btn-warning">Assign</a></td>

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
@endsection
