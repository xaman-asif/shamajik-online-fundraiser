<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
    table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

        td, th {
            border: 1px solid #ddd;
            padding: 8px;
           }

        tr:nth-child(even){
            background-color: #f2f2f2;
            }
        tr:hover {
            background-color: #ddd;
            }
            th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
           }
           a:hover{
               background-color: green;
           }    
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

                <div class="sidebar-brand-text mx-3">Admin Panel </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
    
            <li class="nav-item active">
                <a class="nav-link" href="profile.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add Admin</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="profile.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Add Record</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="profile.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Delete Record</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="profile.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Update Record</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="profile.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Admin List</span></a>
            </li>

        </ul>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mosiour Rahman</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="Admin1.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">POST</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <table>
                            <tr>
                                <th style=color:yellow>user</th>
                                <th style=color:yellow>postID</th>
                                <th style=color:yellow>title</th>
                                <th style=color:yellow>descr</th>
                                <th style=color:yellow>fundNeeded</th>
                                <th style=color:yellow>fundRaised</th>
                                <th style=color:yellow>totalDonors</th>
                                <th style=color:yellow>location</th>
                                <th style=color:yellow>catagory</th>
                                <th style=color:yellow>enddate</th>
                                <th style=color:yellow>image</th>
                            </tr>
                       <?php
                       $servername="localhost";
                       $username="root";
                       $password="";
                       $dbname="SHAMAJIK";

                       $conn = new mysqli($servername, $username, $password, $dbname);

                       if ($conn->connect_error) {
                           die("Connection failed: " . $conn->connect_error);
                           }
                       $sql="SELECT * FROM `posts`";
                       $result = $conn->query($sql);
                       if($result->num_rows>0){
                          while($row = $result->fetch_assoc()){
                            echo "<tr><td>". $row["user"] ."</td><td>". $row["postID"] ."</td><td>". $row["title"] ."</td><td>". $row["descr"] ."</td><td>". $row["fundNeeded"] ."</td><td>". $row["fundRaised"] ."</td><td>". $row["totalDonors"] ."</td><td>". $row["location"] ."</td><td>". $row["catagory"] ."</td><td>". $row["enddate"] ."</td><td>". $row["image"] ."</td></tr>";
                            }
                            echo "</table>";
                            }
                    //        else{
                    //          echo "0 result";
                    //        }
                            $conn-> close();
                          ?>
                        </table>




                        <!-- USER Card Example -->
<!--
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body"><a href="http://localhost/Admin_Panel/user.php">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    <b>USER</b>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-red-300"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
-->

                        <!-- BLOG Card Example -->
<!--
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body"><a href="http://localhost/Admin_Panel/blog.html">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    <b>BLOG</b>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fab fa-blogger fa-2x text-red-300"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
-->

                        <!-- COMMENT Card Example -->
<!--
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body"><a href="http://localhost/Admin_Panel/comment.html">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    <b>COMMENT</b>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-red-300"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
-->

                        <!-- FUND Card Example -->
<!--
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body"><a href="http://localhost/Admin_Panel/fund.html">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    <b>FUND</b>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-university fa-2x text-red-300"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
-->

                        <!-- PAYMRNT Card Example -->
<!--
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body"><a href="http://localhost/Admin_Panel/payment.html">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    <b>PAYMENT</b>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-red-300"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
-->

                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="color: black">Copyright &copy; Shamajik Website 2021</span>
                    </div>
                </div>
            </footer>


            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>
        </div>
    </div>

</body>

</html>
