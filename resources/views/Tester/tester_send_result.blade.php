@extends('Tester.tester_homepage')
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
                                        <th>Report Id</th>
                                        <th>Invoice Id</th>
                                        <th>Farmer Name</th>
                                        <th>Farmer Id</th>
                                        <th>Phone-No</th>
                                        <th>Address</th>

                                        <th>Soil-ID</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                    @foreach($report as $soil)
                                        <tr>
                                            <td>KRISHI_POINT_00{{$soil->id}}</td>
                                            <td>KRISHI_POINT_INV_00{{$soil->invoice_id}}</td>
                                            <td>{{$soil->farmer_name}}</td>
                                            <td>{{$soil->farmer_id}}
                                            <td>{{$soil->phone_no}}</td>
                                            <td>{{$soil->address}}</td>
                                            <td>{{$soil->soil_id}}</td>

                                            <td>


                                                <button onclick="setReportID(this)" data-id="{{ $soil->id }}"
                                                        class="btn btn-primary" data-toggle="modal"
                                                        data-target="#loginModal">View Modal
                                                </button>


                                                / <a
                                                    href="/make_result/{{$soil->id}}"
                                                    class="btn btn-warning"> View Report</a>
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
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route("deliveryreport.store") }}" method="post">
                            @csrf
                            <input type="hidden" id="report_id" value="" name="report_id">

                            <div class="form-group">
                                <label for="modelpass">Supplier Name</label>
                                <select name="sname" id="" class="form-control">
                                    <option value="">Select One</option>
                                    @if(!empty($supplier_list))
                                        @foreach($supplier_list as $data)
                                            <option value="{{$data->id}}"> {{ $data->name }} </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember</label>
                            </div>
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->
    </div>
    <!-- end app-container -->
    <script>
        function setReportID(element) {
            var hidden_id = $(element).attr("data-id");
            $("#report_id").val(hidden_id);
        }
    </script>
@endsection

