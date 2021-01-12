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

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname1">Lab Test Id</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="labtest_id" name="labtest_id" placeholder="Lab Test Id" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ADDRESS">Phs</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="Phs" name="Phs" placeholder="Phs" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">




                                    <div class="form-group">
                                        <label class="control-label" for="username1">Phosphorus</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="phosphorus" name="phosphorus" placeholder="phosphorus" />
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label class="control-label" for="username1">Potassium</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="potassium" name="potassium" placeholder="potassium" />
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">calcium</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="calcium" name="calcium" placeholder="calcium" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">Organic Matter</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="organic matter" name="organic_matter" placeholder="Organic_Matter" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">acidity</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="acidity" name="acidity" placeholder="Acidity" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">Cec</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="cec" name="cec" placeholder="cec" />
                                        </div>
                                    </div>
                                </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="SOIL-ID">Nitrogen</label>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" id="nitrogen" name="nitrogen" placeholder="nitrogen" />
                                    </div>
                                </div>
                            </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">Phosphorus Amount
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="phosphorus_amount" name="phosphorus_amount" placeholder="phosphorus amount" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="SOIL-ID">Potash</label>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="potash" name="potash" placeholder="potash" />
                            </div>
                        </div>
                    </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="SOIL-ID">zinc</label>
                        <div class="mb-2">
                            <input type="text" class="form-control" id="zinc" name="zinc" placeholder="zinc" />
                        </div>
                    </div>
                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">sulfer</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="sulfer" name="sulfer" placeholder="sulfer" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">lime</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="lime" name="lime" placeholder="lime" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">comment1</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="comment1" name="comment1" placeholder="comment1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="SOIL-ID">comment2</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" id="comment2" name="comment2" placeholder="comment2" />
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
    <!-- end footer -->
    </div>
    <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins --

    >
@endsection

