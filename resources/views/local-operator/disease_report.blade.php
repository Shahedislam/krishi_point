@extends('Agricuture-manager.Manager_homepage')
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

                        </div>
                    </div>
                    <!-- end page title -->
                </div>
                <div class="col-md-12 m-b-30">
                    <h3 class="text-center ">Krishi Point</h3>
                    <p class="text-center">Savar,Dhaka-1206</p>
                    <h4 class="text-center ">Crops Test Report</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" >
                            <table  style="font-size: 14px">


                                <tr>

                                    <td></td>
                                    <td class="meta-head">Test ID</td>
                                    <td>T_2021100{{$result->id}}</td>
                                </tr>

                                <tr>

                                    <td></td>
                                    <td class="meta-head">Farmer-NAME</td>
                                    <td>{{$result->farmer_name}}</td>
                                </tr>
                                <tr>
                                    <td></td>

                                    <td class="meta-head">Farmer-ID</td>

                                    <td>{{$result->farmer_id}}</td>


                                </tr>



                                <tr>
                                    <td></td>
                                    <td class="meta-head">Phone-NO</td>
                                    <td>{{$result->phone_no}}</td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="meta-head">Address</td>
                                    <td>{{$result->address}}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6 text-right">

                            <p class="text-center"> <strong>{{ date("d M,Y",strtotime($result->date)) }}</strong>  </p>

                            <h5 class="text-center"> Invoice Number </h5>
                            <h5 class="text-center">{{$result->invoice_id}}</h5>
                            <p class="text-center" style="color:black" ><strong style="border-left: 1px solid black;border-right: 1px solid black;border-top: 1px solid black; border-bottom: 1px solid black;"> Farmers Copy</strong></p>
                        </div>
                    </div>
                    <br> <br>


                    <table class="table" id="items">

                        <tr>
                        <tr>
                            <th>Crops-Name</th>
                            <th>{{$result->crops_name}}</th>
                        </tr>
                        <tr>
                            <th>Disease Name</th>
                            <th>{{$result->dname}}</th>
                        </tr>
                        <tr>
                            <th>Crops-syptoms</th>
                            <th>{{$result->crops_syptoms}}</th>
                        </tr>
                        <tr>
                            <th>Remedy</th>
                            <th>{{$result->remedy}}</th>
                        </tr>
                    </table>

                    <br><br><br>
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 text-right">
                            <p > <strong>Report Finalized By</strong></p>
                            <p>
                                @php
                                    echo \Illuminate\Support\Facades\Auth::user()->name;
                                @endphp
                            </p>
                            <p>-----------------------------------</p>
                            Date: {{ date("d/m/Y") }}
                        </div>

                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="printDiv('printdata')">Print
                        </button>
                    </div>


                    <!-- end row -->
                    <!--faq-contant-start-->


                </div>
            </div>
        </div>
    </div>



    <!--faq-contant-end-->
    <
    <!-- end container-fluid -->

    <!-- end app-main -->
    <
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
