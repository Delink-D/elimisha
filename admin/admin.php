<?php

    session_start();
    include_once 'dbconnect.php';

    if(!isset($_SESSION['admin']))
    {
    	header("Location: http://127.0.0.1/hacktoteach");
    }

    // include files
    include 'get/get-trainers.php';

    $user = $_SESSION['user'];
    $res=mysql_query("SELECT * FROM admin_login WHERE email='$user'");

    while($row = mysql_fetch_assoc($res)){
    	$trainers_id = $row['admin_id'];
    	$uname = $row['uname'];
    	$email = $row['email'];
    }


    if(isset($_POST['submit_data']))
    {

	$student_id = mysql_real_escape_string($_POST['student_id']);
	$fee_p = mysql_real_escape_string($_POST['fee_p']);
	$fee_e = mysql_real_escape_string($_POST['fee_e']);
	$payed_b = mysql_real_escape_string($_POST['payed_b']);


	$student_id = trim($student_id);
	$fee_p = trim($fee_p);
	$fee_e = trim($fee_e);
	$payed_b = trim($payed_b);


	// email exist or not
	$query = "SELECT student_id FROM student_reg WHERE id_number='$id_number'";
	$result = mysql_query($query);

	$count = mysql_num_rows($result); // if id found then pay

	if($count == 1){

		if(mysql_query("INSERT INTO student_fee(student_id,fee_p,fee_e,payed_b) VALUES('$student_id','$fee_p','$fee_e','$payed_b')"))
		{
			?>
			<script>alert('successfully payed ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('error while paying check id...');</script>
			<?php
		}
	}
	else{
			?>
			<script>alert('already payed ...');</script>
			<?php
	}

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
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
                    <form class="form form-inline" action="" method="post">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="uname" class="control-label">User Name:</label>
                                <input type="text" class="form-control" id="uname" placeholder="User Name" name="uname">
                            </div>


                            <div class="form-group">
                                <label for="phone" class="control-label">Phone Num:</label>
                                <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                            </div>


                            <hr>

                            <div class="form-group">
                                <label for="ppic" class="control-label">Prof Pic:</label>
                                <input type="file" class="form-control" id="ppic" name="profpic">
                            </div>
                            <hr>

                             <div class="form-group">
                                <label for="pass" class="control-label">Password:</label>
                                <input type="Password" class="form-control" id="pass" placeholder="New Password" name="pass">
                            </div>
                             <div class="form-group">
                                <label for="pass2" class="control-label">Retype:</label>
                                <input type="Password" class="form-control" id="pass2" name="pass2" placeholder="Education Level">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="submit" value="Submit Edits" class="btn btn-primary" data-dismiss="modal">
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <div class="modal fade" id="editprof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Profile</h4>
                    </div>
                    <form class="form form-inline" action="" method="post">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="uname" class="control-label">User Name:</label>
                                <input type="text" class="form-control" id="uname" placeholder="User Name" name="uname">
                            </div>


                            <div class="form-group">
                                <label for="phone" class="control-label">Phone Num:</label>
                                <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                            </div>


                            <hr>

                            <div class="form-group">
                                <label for="ppic" class="control-label">Prof Pic:</label>
                                <input type="file" class="form-control" id="ppic" name="profpic">
                            </div>
                            <hr>

                             <div class="form-group">
                                <label for="pass" class="control-label">Password:</label>
                                <input type="Password" class="form-control" id="pass" placeholder="New Password" name="pass">
                            </div>
                             <div class="form-group">
                                <label for="pass2" class="control-label">Retype:</label>
                                <input type="Password" class="form-control" id="pass2" name="pass2" placeholder="Education Level">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="submit" value="Submit Edits" class="btn btn-primary" data-dismiss="modal">
                        </div>
                    </form>
                </div>
            </div>
            </div>

            <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                <li>
                    <a href="admin.php?c=dashboard">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="admin.php?c=inbox">
                        <i class="fa fa-inbox"></i> Inbox <span class="label pull-right"></span>
                    </a>
                </li>
                <li>
                    <a href="admin.php?c=classList">
                        <i class="fa fa-newspaper-o"></i>Class List <span class="label pull-right">7</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php?c=newstudents">
                        <i class="fa fa-newspaper-o"></i>New Students <span class="label pull-right">7</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php?c=trainerList">
                        <i class="fa fa-inbox"></i>Trainer List <span class="label pull-right">7</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php?c=fee_p">
                        <i class="fa fa-inbox"></i>Fee payment <span class="label pull-right">7</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php?c=mail">
                      <i class="fa fa-envelope-o"></i> Send Mail</a>
                </li>
                <li>
                    <a href="admin.php?c=budget">
                      <i class="fa fa-usd"></i> Budget updates</a>
                </li>
            </ul>
            <!-- /.nav -->
            <h5 class="nav-email-subtitle">More</h5>
            <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
            <li>
                <a href="#">
                    <i class="fa fa-folder-open"></i> Uploaded Content<span class="label label-danger pull-right"></span>
                </a>
            </li>

            <li>
                <a href="logout/logout.php?logout=logout">
                    <i class="fa fa-lock"></i> Sign Out
                </a>
            </li>
            </ul>
            <!-- /.nav -->
            </div>

            <div class="col-sm-9">
        <!-- resumt -->
        <div class="panel panel-default">
            <div class="content">
                <?php
                    error_reporting(0);

                    $content = $_GET['c'];

                    if ($content === 'budget') {
                        include 'budget.php';

                    } elseif ($content === 'fee') {
                        include 'student-fee.php';

                    }elseif ($content === 'inbox') {
                       include 'inbox.php';

                    }elseif ($content ==='classList') {
                       include 'classList.php';

                    }elseif ($content ==='trainerList') {
                       include 'trainer-list.php';

                    }elseif ($content ==='fee_p') {
                        include 'fee_p.php';

                    }elseif ($content ==='newstudents') {
                        include 'new-students.php';

                    }else {
                        include 'dashboard.php';

                    }
                ?>
            </div>
             </div>
             </div>

            </div>
        </div>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script>
            window.jQuery || document.write('<script src="js/jquery-3.1.1.js"><\/script>')
        </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
