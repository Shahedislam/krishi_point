@extends('Agricuture-manager.Manager_homepage')
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


                                </tr>

                            </table>
                            <br>

                            <div class="col-md-12 m-b-30">


                                <br>

                                <div class="col-md-12 m-b-30">

                                    <table id="meta">
                                        <tr>





                                        </tr>

                                    </table>
                                    <table class="table" id="items">

                                        <tr>
                                            <th>reason-1</th>
                                            <th>reason-2</th>
                                            <th>reason-3</th>
                                            <th>reason-4</th>
                                            <th>reason-5</th>

                                        </tr>
                                        <tr>

                                            <td>{{$disease_info->crops_syptoms_1}}</td>
                                            <td>{{$disease_info->crops_syptoms_2}}</td>
                                            <td>{{$disease_info->crops_syptoms_3}}</td>
                                            <td>{{$disease_info->crops_syptoms_4}}</td>
                                            <td>{{$disease_info->crops_syptoms_5}}</td>

                                        </tr>


                                        {{--<tr>
                                            <td colspan="2" class="blank"></td>
                                            <td colspan="2" class="total-line">Subtotal</td>
                                            <td class="total-value">
                                                <div id="subtotal"></div>
                                            </td>
                                        </tr>
                                        <tr>--}}




                                    </table>

                                </div>
                            <div>



                                    {{--<tr>
                                        <td colspan="2" class="blank"></td>
                                        <td colspan="2" class="total-line">Subtotal</td>
                                        <td class="total-value">
                                            <div id="subtotal"></div>
                                        </td>
                                    </tr>
                                    <tr>--}}


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
</body>


</html>

