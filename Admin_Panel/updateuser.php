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
                                <a class="dropdown-item" href="#">
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
                        <h1 class="h3 mb-0 text-gray-800">USER</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>


                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Userinfo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="updatedata.php" method="POST">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label>username</label>
                            <input type="text" name="username" id="update_username" class="form-control" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label>userrole</label>
                            <select class="form-control" id="userrole" name="userrole">
                            <option value="Barishal">Organization</option>
                            <option value="Chittagong">Individual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>raised</label>
                            <input type="text" name="raised" id="raised" class="form-control" placeholder="raised">
                        </div>
                        <div class="form-group">
                            <label>funded</label>
                            <input type="text" name="funded" id="funded" class="form-control" placeholder="funded">
                        </div>
                        <div class="form-group">
                            <label>fullname</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter fullname">
                        </div>
                        <div class="form-group">
                            <label>contact</label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter contact">
                        </div>
                        <div class="form-group">
                            <label>Chose your location</label>
                            
                <select class="form-control" id="location" name="location">
                    <option value="Barishal">Barishal</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Dhaka" selected>Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    <table>
                            <tr>
                                <th style=color:yellow>username</th>
                                <th style=color:yellow>userrole</th>
                                <th style=color:yellow>raised</th>
                                <th style=color:yellow>funded</th>
                                <th style=color:yellow>fullname</th>
                                <th style=color:yellow>contact</th>
                                <th style=color:yellow>location</th>
                                <th style=color:yellow>Edit</th>
                            </tr>
                            <?php

                  include "dbConn.php"; // Using database connection file here

                  $records = mysqli_query($db,"select * from `userinfo`"); // fetch data from database

                  while($data = mysqli_fetch_array($records))
                  {
                    ?>
                            <tr>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['userrole']; ?></td>
                                <td><?php echo $data['raised']; ?></td> 
                                <td><?php echo $data['funded']; ?></td>
                                <td><?php echo $data['fullname']; ?></td>
                                <td><?php echo $data['contact']; ?></td>
                                <td><?php echo $data['location']; ?></td>
                                <td><button type="button" class="btn btn-success editbtn">Edit</button></td>
                            </tr>	
                            <?php
                            }
                            ?>
                        </table>

                    </div>
                <!-- </div> -->
            </div>

            <!-- Content Row -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="color: black">Copyright &copy;SHAMAJIK 2021</span>
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
            
            <script>
               
               $(document).ready(function () {
                   $('.editbtn').on('click',function(){

                       $('#editmodal').modal('show');

                       $tr = $(this).closest('tr');

                       var data = $tr.children("td").map(function(){
                            return $(this).text();
                       }).get();

                       console.log(data);

                       $('#username').val(data[0]);
                       $('#userrole').val(data[1]);
                       $('#raised').val(data[2]);
                       $('#funded').val(data[3]);
                       $('#fullname').val(data[4]);
                       $('#contact').val(data[5]);
                       $('#location').val(data[6]);


                   });
               }); 
            </Script>        

        </div>
    </div>

</body>

</html>