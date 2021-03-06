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
                                    <h4 class="card-title text-center">Supplier Info</h4>
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
                                                <th>area</th>
                                                <th>phone-no</th>
                                                <th>email</th>
                                                <th>Action</th>

                                            </tr>
                                            @foreach($supplier_info as $tester)
                                                <tr>
                                                    <td>{{$tester->name}}</td>
                                                    <td>{{$tester->address}}</td>
                                                    <td>{{$tester->area}}</td>
                                                    <td>{{$tester->phone_no}}</td>
                                                    <td>{{$tester->email}}</td>

                                                    <td><a href="delete-supplier/{{$tester->id}}" class="btn btn-warning">delete</a></td>

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
    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->

<!-- plugins -->
<script src="assets/js/vendors.js"></script>

<!-- custom app -->
<script src="assets/js/app.js"></script>
</body>

</html>


