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

                                        <th>Report ID</th>
                                        <th>View Report</th>

                                    </tr>
                                    @foreach($view as $soil)
                                        <tr>
                                            <td>KRISHI_POINT0{{$soil->report_id}}</td>
                                            <td><a href="make_result/{{$soil->report_id}}"
                                                   class="btn btn-warning">View</a>
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

