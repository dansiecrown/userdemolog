<?php
include('header.php')
?>

<?php
include('sidebar.php')
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Infomation ards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="glyphicon glyphicon-gift"></i></h1>
                                <h6 class="text-white">Packages</h6>
                                <small id="smallie">1123</small>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="glyphicon glyphicon-usd"></i></h1>
                                <h6 class="text-white">Payments</h6>
                                <small id="smallie">1123 new Payment</small>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->

                     <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="glyphicon glyphicon-open"></i></h1>
                                <h6 class="text-white">Shipment</h6>
                                <small id="smallie">1123 </small>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="glyphicon glyphicon-check"></i></h1>
                                <h6 class="text-white">Delivered</h6>
                                <small id="smallie">1123</small>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                    <!-- Column -->
                    
                    <!-- Column -->
                </div>

                <!--=============================================================== -->
                    <!-- table info -->
                <!--=============================================================== -->
            <div class="row">
                    
                    <div class="col-md-12 col-lg-12 col-xlg-12">
                       <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Line Chart</h5>
                                <div class="bars" style="height: 400px;"></div>
                            </div>
                        </div>
                </div>
                    
            </div>

             <div class="row">
                <div class="col-12">
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Package Received Today</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Delivered By</th>
                                                <th>Time</th>
                                                <th>Office</th>
                                                <th>Refrence</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Amazon</td>
                                                <td>12:28pm</td>
                                                <td>Office 1</td>
                                                <td>01213A3412B</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                             
                                            </tr>
                                            
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                
                                            </tr>
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>Deliverrd By</th>
                                                <th>Time</th>
                                                <th>Office</th>
                                                <th>Reference</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

                       <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Shipments Done Today</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Tracking</th>
                                      <th scope="col">Receiver</th>
                                      <th scope="col">Location</th>
                                      <th scope="col">Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>0923c24a</td>
                                      <td>Otto Peace</td>
                                      <td>US | Nigeria</td>
                                      <td>Approved</td>
                                    </tr>
                                     <tr>
                                      <th scope="row">1</th>
                                      <td>0923c24a</td>
                                      <td>Angelica Ramos</td>
                                      <td>US | Europe</td>
                                      <td>Approved</td>
                                    </tr>
                                     <tr>
                                      <th scope="row">1</th>
                                      <td>0923c24a</td>
                                      <td>Priscilla Chan</td>
                                      <td>China | Nigeria</td>
                                      <td>Approved</td>
                                    </tr>
                                     <tr>
                                      <th scope="row">1</th>
                                      <td>0923c24a</td>
                                      <td>Otto Peace</td>
                                      <td>US | Nigeria</td>
                                      <td>Approved</td>
                                    </tr>
                                   
                                  </tbody>
                            </table>
                        </div>
                </div>
            </div>
               
            
                           <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!--<div id= the_leg>-->
            <!--<footer class="footer text-center">-->
            <!--    Copyright: PerfCreg Web Development Company.-->
            <!--</footer>-->
            <!--</div>-->

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   <?php
   include('footer.php')
   ?>

</body>

</html>