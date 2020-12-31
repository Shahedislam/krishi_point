@extends('local-operator.style')
@section("content")

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">

            <!-- begin row -->
            <div class="row editable-wrapper">
                <div class="col-lg-12 ">
                    <div class="card card-statistics">
                        <form id="payment" action="{{ route("tester.store") }}">
                            @csrf
                            <input type="hidden" name="program_id" value="{{$soil_info->id}}" method="post">

                            <div class="card-body">
                                <div class="">
                                 {{--   <table id="table"
                                           class="table display responsive nowrap table-light table-bordered">
                                        <tr>
                                            <th></th>
                                            <th>Farmers-ID</th>
                                            <th>Address</th>
                                            <th>Phone-no</th>
                                            <th>Test-name</th>
                                            <th>Soil-ID</th>
                                            <th>Payment-No</th>

                                        </tr>
                                        <tr>


                                            <td>{{$soil_info->NAME}}</td>

                                            <td>{{$soil_info->FARMER_ID}}
                                            <td>{{$soil_info->PHONE_NO}}</td>
                                            <td>{{$soil_info->ADDRESS}}</td>
                                            <td>{{$soil_info->test_name}}</td>
                                            <td>{{$soil_info->SOIL_ID}}</td>
                                            <td>{{$soil_info->Payment_number}}</td>


                                        </tr>

                                        </thead>
                                        </tbody>

                                    </table>--}}

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for=""> Farmers Name </label>
                                            <input type="text" class="form-control" value = "{{ $soil_info->NAME }}" disabled>
                                        </div>

                                        <div class="col-md-4">
                                            <label for=""> Farmers ID </label>
                                            <input type="text" class="form-control" value = "{{ $soil_info->FARMER_ID }}" disabled>
                                        </div>
                                        <div class="col-md-4">

                                            <p>{!! DNS1D::getBarcodeHTML($soil_info->Payment_number, "C128",1.4,22) !!}</p>
                                            <label for="" class="badge">Barcode - {{ strtoupper($soil_info->Payment_number) }}</label>
                                        </div>
                                        <div class="col-md-4">
                                            <label for=""> Address </label>
                                            <input type="text" class="form-control" value = "{{ $soil_info->ADDRESS }}" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <label for=""> Test Name </label>
                                            <input type="text" class="form-control" value = "{{ $soil_info->test_name }}" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <label for=""> S </label>
                                            <input type="text" class="form-control" value = "{{ $soil_info->SOIL_ID }}" disabled>
                                        </div>

                                    </div>


                                </div>


                                <div class="row">


                                    <div class="col-md-3">
                                        <label for="">Choose a Tester:</label>

                                        <select name="test" class="form-control form-group">
                                            <option value="">Select One</option>
                                            @if(!empty('tester_info'))

                                                @foreach($tester_info as $test)
                                                    <option value="{{$test->user_id}}">{{$test->name}}</option>
                                                @endforeach


                                            @endif


                                        </select>

                                    </div>
                                </div>


                            </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="assign" value="assign">
                            assign
                        </button>

                    </div>
                </div>
            </div>
            </form>
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

