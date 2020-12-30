@extends('Administrator.admin')
@section("content")
    <!-- end row -->
    <!-- start Validation row -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">

        <!-- end row -->
                        <!-- start Validation row -->

                        <div class="col-sm-12 col-lg-12 col-xxl-12 mb-30">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Supplier Form</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form id="info" action="{{ route("info.store") }}" method="POST">
                                            @csrf
                                            <div class="form-row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="firstname1">Name</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="" name="NAME" placeholder="NAME" />
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label" for="ADDRESS">Address</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="ADDRESS" name="ADDRESS" placeholder="ADDRESS" />
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="ADDRESS">Area</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="Area" name="Area" placeholder="Area" />
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="username1">Phone No</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="PHONE_NO" name="PHONE_NO" placeholder="PHONE_NO" />
                                                </div>


                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="username1">User-id</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="user id" />
                                                </div>


                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="SOIL-ID">Email</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="Email" name="Email" placeholder="Email" />
                                                </div>
                                            </div>
                                            </div>
                                            </div>


                                                <div class="form-row">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-5">

                                                    <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end Validation row  -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
@endsection
