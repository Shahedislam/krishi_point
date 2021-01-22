@extends('Tester.tester_homepage')
@section('content')
    <!-- end row -->
    <!-- start Validation row -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">

            <div class="col-sm-12 col-lg-12 col-xxl-12 mb-30">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Make Result</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="info" action="{{ route("makeresult.store") }}" method="POST">
                            @csrf

                            <input type="hidden" name="soil_id" value="{{$soil_info->SOIL_ID}}">
                            <input type="hidden" name="farmer_id" value="{{$soil_info->FARMER_ID}}">
                            <input type="hidden" name="farmer_name" value="{{$soil_info->NAME}}">
                            <input type="hidden" name="address" value="{{$soil_info->ADDRESS}}">
                            <input type="hidden" name="phone_no" value="{{$soil_info->PHONE_NO}}">
                            <input type="hidden" name="invoice_id" value="{{$soil_info->invoice_id}}">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Date</label>
                                        <div class="mb-2">
                                            <input type="date" class="form-control" id="date" name="date"
                                                   placeholder="date"/>
                                        </div>
                                    </div>
                                </div>

                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Lab Test Id</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="labtest_id" name="labtest_id"
                                                   placeholder="Lab Test Id" disabled/>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Invoice Id</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" value = "{{$soil_info->invoice_id}}"
                                                   placeholder="invoice Id" disabled/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Soil Id</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" value = "{{$soil_info->SOIL_ID}}"
                                                   placeholder="Soil Id" disabled/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Farmer Id</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" value ="{{ $soil_info->FARMER_ID}}"
                                                   placeholder="Farmer Id" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Address</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" value = "{{ $soil_info->ADDRESS}}"
                                                   placeholder="Address" disabled/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Phone-no</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" value = "{{ $soil_info->PHONE_NO}}"
                                                   placeholder="Phone-no" disabled/>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Farmer Name</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" value = "{{ $soil_info->NAME}}"
                                                   placeholder="Farmer Name" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h4 class="card-title pt-2 pb-2" style="color: #612ca7;">Result Data</h4>
                            <hr>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ADDRESS">Phs</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="Phs" name="Phs"
                                                   placeholder="Phs"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">


                                    <div class="form-group">
                                        <label class="control-label" for="username1">Phosphorus</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="phosphorus"
                                                   name="phosphorus" placeholder="phosphorus"/>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label class="control-label" for="username1">Potassium</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="potassium"
                                                   name="potassium" placeholder="potassium"/>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">calcium</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="calcium"
                                                   name="calcium" placeholder="calcium"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">Organic Matter</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="organic matter"
                                                   name="organic_matter" placeholder="Organic_Matter"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">acidity</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="acidity"
                                                   name="acidity" placeholder="Acidity"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">Cec</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="cec" name="cec"
                                                   placeholder="cec"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">Nitrogen</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="nitrogen"
                                                   name="nitrogen" placeholder="nitrogen"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">Potash</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="potash" name="potash"
                                                   placeholder="potash"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">zinc</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="zinc" name="zinc"
                                                   placeholder="zinc"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">sulfer</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="sulfer" name="sulfer"
                                                   placeholder="sulfer"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">lime</label>
                                        <div class="mb-2">
                                            <input type="text" value="0" class="form-control" id="lime" name="lime"
                                                   placeholder="lime"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">Result-status</label>
                                        <div class="mb-2">
                                            <textarea name="result" class="form-control"
                                                      id="Result"></textarea>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="Comment">Comment</label>
                                        <div class="mb-2">
                                            <textarea name="comment" class="form-control" id="comment"></textarea>

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

    <!-- plugins --

    >
@endsection

