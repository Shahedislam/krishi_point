@extends('Agricuture-manager.Manager_homepage')
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
                                    <h4 class="card-title">Disease Find Out Form</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="info" action="{{ route("disease.store") }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="crops_id" value="{{$crops_info->crops_ID}}">
                                    <input type="hidden" name="farmer_id" value="{{$crops_info->FARMER_ID}}">
                                    <input type="hidden" name="farmer_name" value="{{$crops_info->NAME}}">
                                    <input type="hidden" name="crops_name" value="{{$crops_info->CROPS_NAME}}">
                                    <input type="hidden" name="address" value="{{$crops_info->ADDRESS}}">
                                    <input type="hidden" name="phone_no" value="{{$crops_info->PHONE_NO}}">
                                    <input type="hidden" name="invoice_id" value="{{$crops_info->invoice_id}}">

                                    <div class="form-row">



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
                                                    <label class="control-label" for="firstname1">Crops Test Id</label>
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" id="test_id" name="test_id"
                                                               placeholder="Lab Test Id" disabled/>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="firstname1">Invoice Id</label>
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" value = "{{$crops_info->invoice_id}}"
                                                               placeholder="invoice Id" disabled/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="firstname1">Crops Id</label>
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" value = "{{$crops_info->CROPS_ID}}"
                                                               placeholder="Soil Id" disabled/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="firstname1">Farmer Id</label>
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" value ="{{ $crops_info->FARMER_ID}}"
                                                               placeholder="Farmer Id" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="firstname1">Address</label>
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" value = "{{ $crops_info->ADDRESS}}"
                                                               placeholder="Address" disabled/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="firstname1">Phone-no</label>
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" value = "{{ $crops_info->PHONE_NO}}"
                                                               placeholder="Phone-no" disabled/>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="firstname1">Farmer Name</label>
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" value = "{{ $crops_info->NAME}}"
                                                               placeholder="Farmer Name" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label" for="firstname1">Crops Name</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" value = "{{ $crops_info->CROPS_NAME}}"
                                                           placeholder="Farmer Name" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                        <div class="col-md-6">

                                        <div class="form-group">
                                        <label class="control-label" for="firstname1">Disease_Name</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="dname" name="dname" placeholder="Disease" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="ADDRESS">Crops_Symtops</label>
                                        <div class="mb-2">
                                            <textarea name="Symptomps" class="form-control" id="crops_syptoms"></textarea>
                                        </div>
                                    </div>
                                        </div>

                                                                               <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="username1">Crops-Remedy</label>
                                                <div class="mb-2">
                                                    <textarea name="remedy" class="form-control" id="remedy"></textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">

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
@endsection
