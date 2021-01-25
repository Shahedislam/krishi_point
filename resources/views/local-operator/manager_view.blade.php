@extends('Agricuture-manager.Manager_homepage')
@section("content")
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">

        <!-- end row -->
                    <!-- begin row -->
                    <div class="row editable-wrapper">
                        <div class="col-lg-12 ">
                            <div class="card card-statistics">
                                <form id="payment" action="{{ route("assigncrops.store") }}">
                                    @csrf
                                    <input type="hidden" name="man_id" value="{{$crops_info->farmer_id}}" method="post">

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="table"
                                                   class="table display responsive nowrap table-light table-bordered">
                                                <tr>
                                                    <th>Farmers-name</th>
                                                    <th>Farmers-ID</th>
                                                    <th>Address</th>
                                                    <th>Phone-no</th>
                                                    <th>Test-name</th>
                                                    <th>Crops-name</th>
                                                    <th>Soil-ID</th>
                                                    <th>Payment-No</th>

                                                </tr>
                                                <tr>


                                                    <td>{{$crops_info->NAME}}</td>
                                                    <td>{{$crops_info->FARMER_ID}}</td>
                                                    <td>{{$crops_info->ADDRESS}}</td>
                                                    <td>{{$crops_info->PHONE_NO}}</td>
                                                    <td>{{$crops_info->CROPS_NAME}}</td>
                                                    <td>{{$crops_info->test_name}}</td>
                                                    <td>{{$crops_info->CROPS_ID}}</td>
                                                    <td>{{$crops_info->Payment_number}}</td>

                                                </tr>

                                                </thead>
                                                </tbody>

                                            </table>

                                            <div class="row">
                                                <div class="row-cols-3">
                                                    <label for="cars">Choose a Manager:</label>

                                                    <select name="man" class="form-control-md">
                                                        @if(!empty('manager_info'))

                                                            @foreach($manager_info as $manager)
                                                                <option value="{{$manager->user_id}}">{{$manager->name}}</option>
                                                            @endforeach


                                                        @endif


                                                    </select>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary" name="assign" value="assign">
                                                    assign
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end app-main -->
        </div>
        <!-- end app-container -->
        <!-- begin footer -->
        <footer class="footer">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-left">
                    <p>&copy; Copyright 2019. All rights reserved.</p>
                </div>
                <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                    <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->

<!-- plugins -->
<script src="../assets/js/vendors.js"></script>

<!-- custom app -->
<script src="../assets/js/app.js"></script>
</body>

</html>

