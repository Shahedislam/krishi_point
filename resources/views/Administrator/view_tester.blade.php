@extends('Administrator.admin')
@section("content")
    <!-- end row -->
    <!-- start Validation row -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">



        <div class="col-sm-12 col-lg-12 col-xxl-12 mb-30">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <div class="card-heading">
                                    <h4 class="card-title text-center">Tester-Info</h4>
                                </div>
                            </div>

                            <!-- end row -->
                    <!-- begin row -->
                    <div class="row editable-wrapper">
                        <div class="col-lg-12 ">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="table" class="table display responsive nowrap table-light table-bordered">
                                            <tr>
                                                <th>name</th>
                                                <th>address</th>
                                                <th>phone-no</th>
                                                <th>email</th>
                                                <th>Action</th>

                                            </tr>
                                            @foreach($tester_info as $tester)
                                                <tr>
                                                    <td>{{$tester->name}}</td>
                                                    <td>{{$tester->address}}</td>
                                                    <td>{{$tester->phone_no}}</td>
                                                    <td>{{$tester->email}}</td>

                                                    <td><a href="delete-tester/{{$tester->id}}" class="btn btn-warning">delete</a></td>

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
