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

                        </div>
                    </div>
                    <!-- end page title -->
                </div>
                <div class="col-md-12 m-b-30">
                    <h3 class="text-center ">Krishi Point</h3>
                    <p class="text-center">Savar,Dhaka-1206</p>
                    <h4 class="text-center ">Soil Test Report</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" >
                            <table  style="font-size: 14px">


                                <tr>

                                    <td></td>
                                    <td class="meta-head">Lab Test ID</td>
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
                                    <td class="meta-head">Soil-Id</td>
                                    <td>{{$result->soil_id}}</td>
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
                            <h5>{{$result->invoice_id}}</h5>
                            <p class="text-center" style="color:black" ><strong style="border-left: 1px solid black;border-right: 1px solid black;border-top: 1px solid black; border-bottom: 1px solid black;"> Customer Copy</strong></p>
                        </div>
                    </div>
                    <br> <br>


                    <table class="table" id="items">

                        <tr>
                            <tr>
                            <th>Phs</th>
                            <th>{{$result->Phs}}</th>
                            </tr>
                        <tr>
                            <th>Phosphorus</th>
                            <th>{{$result->phosphorus}}</th>
                            </tr>
                        <tr>
                            <th>Potassium</th>
                            <th>{{$result->potassium}}</th>
                        </tr>
                        <tr>
                            <th>Organic Matter</th>
                            <th>{{$result->organic_matter}}</th>
                        </tr>
                        <tr>
                            <th>Cec</th>
                            <th>{{$result->cec}}</th>
                        </tr>
                        <tr>
                            <th>Nitrogen</th>
                            <th>{{$result->nitrogen}}</th>
                        </tr>
                        <tr>
                            <th>Potash</th>
                            <th>{{$result->potash}}</th>
                        </tr>

                        <tr>
                            <th>lime</th>
                            <th>{{$result->lime}}</th>
                        </tr>
                        <tr>
                            <th>zinc</th>
                            <th>{{$result->zinc}}</th>
                        </tr>
                        <tr>
                            <th>acidity</th>
                            <th>{{$result->acidity}}</th>
                        </tr>
                        <tr>
                            <th>sulfer</th>
                            <th>{{$result->sulfer}}</th>
                        </tr>
                        <tr>
                            <th>Total Percentance</th>
                            <th></th>
                        </tr>




                        </tr>
                        {{--                            <tr>--}}
{{--                        <tr>--}}
{{--                            <td>{{$result->Phs}}</td>--}}
{{--                            <td>{{$result->phosphorus}}</td>--}}
{{--                            <td>{{$result->potassium}}</td>--}}
{{--                            <td>{{$result->calcium}}</td>--}}
{{--                            <td>{{$result->organic_matter}}</td>--}}
{{--                            <td>{{$result->cec}}</td>--}}
{{--                            <td>{{$result->nitrogen}}</td>--}}
{{--                            <td>{{$result->potash}}</td>--}}
{{--                            <td>{{$result->zinc}}</td>--}}
{{--                            <td>{{$result->lime}}</td>--}}
{{--                        </tr>--}}

                    </table>
                    <br><br><br>


                    <div class="row">

                        <div class="col-md-12">
                            Result Comment : {{$result->comment}}
                        </div>
                        <br><br>
                        <div class="col-md-12">
                           <strong> Remarks : {{$result->result}} </strong>
                        </div>
                    </div>
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
