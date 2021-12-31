<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php insert data in mysql by using bootstrap modal </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background: #4aefda;
    }
</style>

<body><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-header text-uppercase text-center"><b>php insert data in mysql by using bootstrap modal</b></div>
                    <div class="card-body">
                        <center><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PHP INSERT DATA USING BOOTSTRAP MODAL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success d-none success"></div>
                    <div class="alert alert-danger d-none error"></div>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" class="form-control" id="uname" placeholder="Enter user name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Role</label>
                            <select id="urole" class="form-control" placeholder="Chose your option">
                                        <option>Organization</option>
                                        <option>Individual</option>
                                        </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Raised</label>
                            <input type="text" class="form-control" id="raised" placeholder="Enter raised ammount">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Funded</label>
                            <input type="text" class="form-control" id="funded" placeholder="Enter funded ammount">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter full name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact</label>
                            <input type="text" class="form-control" id="contact" placeholder="Enter contact here">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <select id="location" class="form-control" placeholder="Chose your location">
                                        <option>Barishal</option>
                                        <option>Chittagong</option>
                                        <option>Dhaka</option>
                                        <option>Khulna</option>
                                        <option>Mymensingh</option>
                                        <option>Rajshahi</option>
                                        <option>Rangpur</option>
                                        <option>Sylhet</option>
                                        </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $(function() {
        $(document).on('click', '#submit', function(e) {
            e.preventDefault();

            var fname = $('#uname').val();
            var lname = $('#urole').val();
            var fname = $('#raised').val();
            var lname = $('#funded').val();
            var fname = $('#fname').val();
            var lname = $('#contact').val();
            var fname = $('#location').val();
            if (uname == '') {
                alert('Please enter uname')
            } else if (urole == '') {
                alert('Please enter urole')
            } 
            else if (raised == '') {
                alert('Please enter raised')
            } 
            else if (funded == '') {
                alert('Please enter funded')
            } 
            else if (fname == '') {
                alert('Please enter fname')
            } 
            else if (contact == '') {
                alert('Please enter contact')
            } 
            else if (location == '') {
                alert('Please enter location')
            } 
            else {
                $.ajax({
                    url: 'insertuser.php',
                    method: 'post',
                    data: {
                        uname: uname,
                        urole: urole,
                        raised: raised,
                        funded: funded,
                        fname: fname,
                        contact: contact,
                        location: location
                    },
                    success: function(data) {
                        $('.success').removeClass('d-none').html(data);
                    },
                    error: function(data) {
                        $('.error').removeClass('d-none').html(data);
                    }
                });
            }
        });
    });
</script>