@extends('local-operator.style')
@section("content")


    <!-- end app-navbar -->
            <!-- begin app-main -->
            <div class="app-main" id="main">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin row -->
                    <div class="row card " id="printdata">

                        <div class="col-md-12 m-b-30">
                            <!-- begin page title -->
                            <div class="d-block  d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                    <h1>Invoice Details</h1>
                                </div>

                            </div>
                            <!-- end page title -->
                        </div>
                        <div class="col-md-12 m-b-30">

                            <table id="meta">
                                <tr>
                                    <td></td>
                                    <td class="meta-head">Invoice Number</td>
                                    <td>{{$crops_info->id}}</td>

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
                                        <td>{{$crops_info->NAME}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>

                                        <td class="meta-head">Farmer-ID</td>

                                        <td>{{$crops_info->FARMER_ID}}</td>



                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="meta-head">Phone-NO</td>
                                        <td>{{$crops_info->PHONE_NO}}</td>


                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="meta-head">Address</td>
                                        <td>{{$crops_info->ADDRESS}}</td>


                                    </tr>

                                </table>

                            </div>
                            <div>

                                <table class="table" id="items">

                                    <tr>
                                        <th>Payment Number</th>
                                        <th>Test Name</th>
                                        <th>Crops Name</th>
                                        <th>Cost</th>
                                        <th>Quantity</th>
                                        <th>Total Cost</th>
                                    </tr>
                                    <tr>

                                        <td>{{$crops_info->Payment_number}}</td>
                                        <td>{{$crops_info->test_name}}</td>
                                        <td>{{$crops_info->CROPS_NAME}}</td>
                                        <td>{{$crops_info->price}}</td>
                                        <td>{{$crops_info->test_count}}</td>
                                        <td>{{$crops_info->total_price}}</td>
                                    </tr>


                                    {{--<tr>
                                        <td colspan="2" class="blank"></td>
                                        <td colspan="2" class="total-line">Subtotal</td>
                                        <td class="total-value">
                                            <div id="subtotal"></div>
                                        </td>
                                    </tr>
                                    <tr>--}}


                                        <td colspan="2" class="blank"></td>
                                        <td colspan="2" class="total-line">Amount Paid</td>


                                    </tr>
                                    <tr>
                                        <td colspan="2" class="blank"></td>
                                        <td colspan="2" class="total-line balance">Balance Due</td>
                                        <td class="total-value balance">
                                            <div class="due"></div>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-success" onclick="printDiv('printdata')">print</button>
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
<!-- end app-container -->
<!-- begin footer -->

<!-- end footer -->
</div>
<!-- end app-wrap -->
</div>
<!-- end app -->

<!-- plugins -->
<script src="assets/js/vendors.js"></script>

<!-- custom app -->
<script src="assets/js/app.js"></script>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>
@endsection
