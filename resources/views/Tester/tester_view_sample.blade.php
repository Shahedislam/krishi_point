@extends('supplier.supplier_mainpage')
@section("content")






    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -
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
                                        <th>Soil-ID</th>
                                        <th>Payment-No</th>
                                        <th>delivery</th>

                                    </tr>
                                    @foreach($soil_info as $soil)
                                        <tr><td>{{$soil->NAME}}</td>
                                            <td>{{$soil->FARMER_ID}}
                                            <td>{{$soil->PHONE_NO}}</td>
                                            <td>{{$soil->ADDRESS}}</td>
                                            <td>{{$soil->test_name}}</td>
                                            <td>{{$soil->SOIL_ID}}</td>
                                            <td>{{$soil->Payment_number}}</td>
                                            <td><a href="tester/{{$soil->id}}"
                                                   class="btn btn-warning">delivery</a>
                                            </td>

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
@endsection

