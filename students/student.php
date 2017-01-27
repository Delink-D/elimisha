<?php

    session_start();

    if (!$_SESSION['student']) {
        header('location: http://127.0.0.1/hacktoteach/index.php');
        exit();
    }

    include 'actions/get-data.php';
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Students || Landing Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <!-- Include Modernizr in the head, before any other Javascript -->
        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <a href="#" class="btn btn-danger btn-block btn-compose-email" data-target="#editprof" data-toggle="modal">Profile</a>

                <div class="modal fade" id="editprof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit Profile</h4>
                            </div>
                            <form class="form form-inline" action="#" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="fname">First Name:</label>
                                        <input type="text" class="form-control" id="fname" readonly value="<?php echo $fname;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname" class="control-label">last Name:</label>
                                        <input type="text" class="form-control" id="lname" readonly value="<?php echo $lname;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="natid" class="control-label">ID Number:</label>
                                        <input type="number" class="form-control" id="natid" readonly value="<?php echo $id;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="control-label">Phone Num:</label>
                                        <input type="number" class="form-control" id="phone" value="<?php echo $phone; ?>" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="dob" class="control-label">D.O.B:</label>
                                        <input type="text" class="form-control" name="dob" id="dob" value="<?php echo $dob; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender" class="control-label">Gender:</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <?php
                                                if ($gender == 'M') {
                                                    echo "<option selected='selected' value='M'>Male</option>";
                                                    echo "<option value='F'>Female</option>";

                                                }else {
                                                    echo "<option value='M'>Male</option>";
                                                    echo "<option selected='selected' value='F'>Female</option>";
                                                }
                                            ?>
                                            
                                        </select>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label for="uname" class="control-label">User Name:</label>
                                        <input type="text" class="form-control" id="uname" value="<?php echo $uname; ?>" name="uname">
                                    </div>
                                     <div class="form-group">
                                        <label for="eduleve" class="control-label">Edu Level:</label>
                                        <input type="text" class="form-control" id="eduleve" name="eduleve" value='<?php echo $edulevel; ?>'>
                                    </div>
                                    <hr>

                                     <div class="form-group">
                                        <label for="pass" class="control-label">Password:</label>
                                        <input type="Password" class="form-control" id="pass" placeholder="New Password" name="pass">
                                    </div>
                                     <div class="form-group">
                                        <label for="pass2" class="control-label">Retype:</label>
                                        <input type="Password" class="form-control" id="pass2" name="pass2" placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" value="Submit Edits" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                    <li>
                        <a href="student.php?c=dashboard">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>
                     <li>
                        <a href="student.php?c=fee"><i class="fa fa-usd"></i> Fee Payment</a>
                    </li>
                    <li>
                        <a href="student.php?c=notices">
                            <i class="fa fa-inbox"></i> Notices <span class="label pull-right">7</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-o"></i> Send Mail</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">35</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-trash-o"></i> Trash</a>
                    </li>
                </ul>
                <!-- /.nav -->
                <h5 class="nav-email-subtitle">More</h5>
                <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
                    <li>
                        <a href="#">
                            <i class="fa fa-folder-open"></i> Uploaded Content<span class="label label-danger pull-right">3</span>
                        </a>
                    </li>

                    <li>
                        <a href="logout/logout.php">
                            <i class="fa fa-lock"></i> Sign Out
                        </a>
                    </li>
                </ul>
                <!-- /.nav -->
            </div>
      <div class="col-sm-9">
        <!-- resumt -->
        <div class="panel panel-default">
          <div class="panel-heading resume-heading">
            <div class="row">
              <div class="col-lg-12">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img class="img-circle img-responsive" alt="" src="images/profile.png">
                  </figure>
                  
                </div>
                <div class="col-xs-12 col-sm-8">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-user-o"></i>&nbsp;&nbsp;&nbsp; <strong><?php echo $name; ?></strong></li>
                        <li class="list-group-item"><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;&nbsp; <strong><?php echo $edulevel; ?></strong></li>
                        <li class="list-group-item"><i class="fa fa-phone"></i> &nbsp;&nbsp;&nbsp;<strong><?php echo $phone; ?></strong> </li>
                        <li class="list-group-item"><i class="fa fa-id-card"></i>&nbsp;&nbsp;&nbsp; <strong><?php echo $id; ?></strong></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

            <div class="content">
                <?php
                    // error_reporting(0);

                    $content = $_GET['c'];

                    if ($content === 'dashboard') {
                        include 'dashboard.php';
                        include 'progress.php';

                    } elseif ($content === 'fee') {
                        include 'student-fee.php';

                    }elseif ($content === 'notices') {
                       include 'notices.php';

                    }else {
                        include 'dashboard.php';
                        include 'progress.php';
                    }
                ?>
            </div>
            
        </div>
      </div>
      <!-- resume -->
    </div>
  </div>
  <!-- scripts -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/jquery-3.1.1.js"><\/script>')
  </script>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Custom JS -->
  <script src="js/script.js"></script>
</body>

</html>
