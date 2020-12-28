@extends('local-operator.style')
@section("content")






    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
        {{--      <div class="row">
                  <div class="col-md-12 m-b-30">
                      <!-- begin page title -->
                      <div class="d-block d-sm-flex flex-nowrap align-items-center">
                          <div class="page-title mb-2 mb-sm-0">
                              --}}{{--Soil sample--}}{{--
                          </div>
                          <div class="ml-auto d-flex align-items-center">
                           --}}{{--   <nav>
                                  <ol class="breadcrumb p-0 m-b-0">
                                      <li class="breadcrumb-item">
                                          <a href="mainpage.blade.php"><i class="ti ti-home"></i></a>
                                      </li>
                                      <li class="breadcrumb-item">
                                          Forms
                                      </li>
                                      <li class="breadcrumb-item active text-primary" aria-current="page">
                                          SOIL-SAMPLE
                                      </li>
                                  </ol>
                              </nav>--}}{{--
                          </div>
                      </div>
                      <!-- end page title -->
                  </div>
              </div>--}}
        <!-- end row -->
            <!-- start Validation row -->

            <div class="col-sm-12 col-lg-12 col-xxl-12 mb-30">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title text-center">Soil-Sample-Collecting</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="soil" action="{{ route("soil.store") }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Name</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="NAME" name="NAME"
                                                   placeholder="NAME"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="lastname1">Farmer Id</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="FARMER-ID" name="FARMER_ID"
                                                   placeholder="FARMER_ID"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="username1">Phone No</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="username1" name="PHONE_NO"
                                                   placeholder="PHONE_NO"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="ADDRESS">Address</label>
                                        <div class="mb-2">
                                            <textarea name="ADDRESS" class="form-control" id=""></textarea>

                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">SOIL ID</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="SOIL-ID" name="SOIL_ID"
                                                   placeholder="SOIL-ID"/>
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="delivery">Soil Delivery</label>
                                        <div class="mb-2">
                                            <input type="date" class="form-control" id="delivery" name="delivery"
                                                   placeholder="delivery-date"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- end Validation row  -->
    </div>




@endsection
