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
                                    <h4 class="card-title">Disease Find Out Form</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="info" action="{{ route("disease.store") }}" method="POST">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col-md-10">

                                        <div class="form-group">
                                        <label class="control-label" for="firstname1">Disease_Name</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="cname" name="cname" placeholder="Crops Name" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="ADDRESS">Crops_Symtops1</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="crops_syptoms_1" name="crops_syptoms_1" placeholder="Crops Reason" />
                                        </div>
                                    </div>
                                        </div>

                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="ADDRESS">Crops_Symptomps2</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="crops_syptoms_2" name="crops_syptoms_2" placeholder="Crops Reason" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="control-label" for="ADDRESS">Crops_Symptomps3</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="crops_syptoms_3" name="crops_syptoms_3" placeholder="Crops Reason" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="ADDRESS">Crops_Symtompss4</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="crops_syptoms_4" name="crops_syptoms_4" placeholder="Crops Reason" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="control-label" for="ADDRESS">Crops_Reasons5</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="crops_syptoms_5" name="crops_syptoms_5" placeholder="Crops Reason" />
                                        </div>
                                    </div>
                                        </div>


                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="username1">Crops-Remedy1</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="remedy_1" name="remedy_1" placeholder="remedy" />
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="username1">Crops-Remedy2</label>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" id="remedy_2" name="remedy_2" placeholder="remedy" />
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="username1">Crops-Remedy3</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="remedy_3" name="remedy_3" placeholder="remedy" />
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
