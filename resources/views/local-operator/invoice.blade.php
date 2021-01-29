@extends('local-operator.style')
@section("content")            <!-- end app-navbar -->
<!-- begin app-main -->
<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row card p-4 " id="printdata">

            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block  d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                    </div>

                </div>
                <!-- end page title -->
            </div>
            <div class="col-md-12 m-b-30">
                <h3 class="text-center ">Krishi Point</h3>
                <p class="text-center">Savar,Dhaka-1206</p>
                <h4 class="text-center ">Invoice Report</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <table style="font-size: 14px">
                            <tr>
                                <td></td>
                                <td class="meta-head">Invoice Number</td>
                                <td>{{$soil_info->id}}</td>

                            </tr>
                            <tr>
                                <td></td>
                                <td class="meta-head">Date</td>
                                <td>{{$soil_info->created_at}}</td>


                            </tr>
                            <tr>

                                <td></td>
                                <td class="meta-head">Farmer-NAME</td>
                                <td>{{$soil_info->NAME}}</td>
                            </tr>
                            <tr>
                                <td></td>

                                <td class="meta-head">Farmer-ID</td>

                                <td>{{$soil_info->FARMER_ID}}</td>


                            </tr>
                            <tr>
                                <td></td>
                                <td class="meta-head">Phone-NO</td>
                                <td>{{$soil_info->PHONE_NO}}</td>


                            </tr>

                            <tr>
                                <td></td>
                                <td class="meta-head">Address</td>
                                <td>{{$soil_info->ADDRESS}}</td>


                            </tr>

                        </table>


                    </div>


                    <div class="col-md-6 text-right">


                        <h5 class="text-center"> Invoice Number </h5>
                        <h5 class="text-center">{{$soil_info->id}}</h5>
                        <h5></h5>
                        <p class="text-center" style="color:black"><strong
                                style="border-left: 1px solid black;border-right: 1px solid black;border-top: 1px solid black; border-bottom: 1px solid black;">
                                 Soil Receipt</strong></p>
                    </div>
                </div>

            </div>


            <table class="table" id="items">

                <tr>
                    <th>Payment Number</th>
                    <th>Test Name</th>
                    <th>Test Price</th>



                </tr>
                <tr>

                    <td>{{$soil_info->Payment_number}}</td>
                    <td>{{$soil_info->test_name}}</td>
                    <td>{{$soil_info->total_price}}</td>

                </tr>
            </table>
            {{--<tr>
                <td colspan="2" class="blank"></td>
                <td colspan="2" class="total-line">Subtotal</td>
                <td class="total-value">
                    <div id="subtotal"></div>
                </td>
            </tr>
            <tr>--}}
            <br><br><br>


            <div class="row">

                <div class="col-md-12">
                    Total Amount : {{$soil_info->total_price}} <br>


                    Paid Amount : {{$soil_info->price}} </strong>
                    <br>
                   <strong style="color: red">  Due </strong>: {{ $soil_info->total_price -$soil_info->price }}
                </div>
            </div>


            <div class="form-row">
                <div class="col-md-8"></div>
                <div class="col-md-4 text-center">
                    <p><strong> Receipt By</strong></p>
                    <p>
                        @php
                        @endphp
                    </p>
                    <p>-----------------------------------</p>
                    Date: {{ date("d/m/Y") }}
                    <br>

                    <br>
                    <div class="text-right">
                        <button type="button" class="btn btn-success" onclick="printDiv('printdata')">Print
                        </button>

                    </div>

                </div>

            </div>





            <!-- end row -->
            <!--faq-contant-start-->

        </div>
    </div>
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
