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
                                    <h4 class="card-title">Payment Process</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="crops" action="{{ route("crops_payment.store") }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="crops_id" value="{{$crops_id}}">

                                    <div class="form-row">
                                        <div class="col-md-4">

                                        <div class="form-group">
                                        <label class="control-label" for="firstname1">Payment Number</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="Payment_Number" name="Payment_Number" placeholder="Payment Number" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="lastname1">Test Name</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="test_name" name="test_name" placeholder="Test Name" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="username1">Cost</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="price" name="price" placeholder="Cost" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="test_count">Test count</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="test_count" name="test_count" placeholder="Test Quantity" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">Total price</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="total_price" name="total_price" placeholder="total_price" />
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

@endsection
