@extends('Tester.tester_homepage')
@section("content")





    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row card " id="printdata">

                <div class="col-md-12 m-b-30">
                    <!-- begin page title -->
                    <div class="d-block  d-sm-flex flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-sm-0">
                            <h1>Report Generation</h1>
                        </div>

                    </div>
                    <!-- end page title -->
                </div>
                <div class="col-md-12 m-b-30">

                <table id="meta">
                    <tr>
                        <td></td>
                        <td class="meta-head">Invoice Number</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td class="meta-head">Date</td>
                        <td></td>


                    </tr>

                </table>
                <br>
                    <div class="col-md-12 m-b-30">

                        <table id="meta">
                            <tr>

                                <td></td>
                                <td class="meta-head">Farmer-NAME</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>

                                <td class="meta-head">Farmer-ID</td>

                                <td></td>


                            </tr>
                            <tr>
                                <td></td>
                                <td class="meta-head">Phone-NO</td>
                                <td></td>


                            </tr>

                            <tr>
                                <td></td>
                                <td class="meta-head">Address</td>
                                <td></td>


                            </tr>

                        </table>


                        <div class="modal-footer">

                        <button type="button" class="btn btn-success" onclick="printDiv('printdata')">print
                        </button>
                    </div>


                    <!-- end row -->
                    <!--faq-contant-start-->

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--faq-contant-end-->
    </div>
    <!-- end container-fluid -->
    </div>
    <!-- end app-main -->
    </div>
@endsection
