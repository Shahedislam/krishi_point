@extends('local-operator.style')
@section("content")
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">


        <!-- end row -->
                    <!-- start Validation row -->

                    <div class="col-sm-12 col-lg-12 col-xxl-12 mb-30">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <div class="card-heading">
                                    <h4 class="card-title">Crops-Sample-Collecting</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="crops" action="{{ route("crops.store") }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-4">

                                        <div class="form-group">
                                        <label class="control-label" for="firstname1">Farmer NAME</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="NAME" name="NAME" placeholder="NAME" />
                                        </div>
                                    </div>
                                        </div>

                                        <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="farmer_id">Farmer Id</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="FARMER-ID" name="FARMER_ID" placeholder="FARMER_ID" />
                                        </div>
                                    </div>
                                        </div>
                                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="phone_no">Phone No</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="username1" name="PHONE_NO" placeholder="PHONE_NO" />
                                        </div>
                                    </div>
                                            </div>
                                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label" for="address">Address</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="ADDRESS" name="ADDRESS" placeholder="ADDRESS" />
                                        </div>
                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="crops">Crops Id</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="crops_id" name="crops_id" placeholder="crops-ID" />
                                        </div>
                                    </div>
                                                    </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="crops">Crops Name</label>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" id="crops_Name" name="crops_Name" placeholder="crops-Name" />
                                            </div>

                                    </div>
                                        </div>
                                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="delivery">Date-of-sample-Submmission</label>
                                        <div class="mb-2">
                                            <input type="date" class="form-control" id="sample" name="sample" placeholder="sample-date" />
                                        </div>
                                    </div>

                                    </div>
                                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="delivery">Crops Delivery</label>
                                        <div class="mb-2">
                                            <input type="date" class="form-control" id="delivery" name="delivery" placeholder="Delivery-Date" />
                                        </div>
                                    </div>
                                            </div>
                                        </div>


                                    <div class="form-row">
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-6">

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
    <!-- end footer -->
</div>
<!-- end app-wrap -->
</div>
<!-- end app -->

<!-- plugins -->

@endsection
