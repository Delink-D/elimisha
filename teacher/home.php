<?php

  session_start();
  include_once 'dbconnect.php';

  if(!isset($_SESSION['teacher']))
  {
  	header("location: http://127.0.0.1/hacktoteach/index.php");
  }

  $res=mysql_query("SELECT * FROM trainers_log WHERE email='$user'");

  while($row = mysql_fetch_assoc($res)){
  	$trainers_id = $row['trainers_id'];
  	$uname = $row['uname'];
  	$email = $row['email'];
  }


  if(isset($_POST['submit_data']))
  {

  	$student_id = mysql_real_escape_string($_POST['student_id']);
  	$fname = mysql_real_escape_string($_POST['fname']);
  	$lname = mysql_real_escape_string($_POST['lname']);
  	$id_number = mysql_real_escape_string($_POST['id_number']);


  	$student_id = trim($student_id);
  	$fname = trim($fname);
  	$lname = trim($lname);
  	$id_number = trim($id_number);


  	// email exist or not
  	$query = "SELECT student_id FROM student_reg WHERE id_number='$id_number'";
  	$result = mysql_query($query);

  	$count = mysql_num_rows($result); // if email not found then register

  	if($count == 0){

  		if(mysql_query("INSERT INTO student_reg(student_id,fname,lname,id_number) VALUES('$student_id','$fname','$lname','$id_number')"))
  		{
  			?>
  			<script>alert('successfully registered ');</script>
  			<?php
  		}
  		else
  		{
  			?>
  			<script>alert('error while registering you...');</script>
  			<?php
  		}
  	}
  	else{
  			?>
  			<script>alert('Sorry tag already exist ...');</script>
  			<?php
  	}

  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Trainer</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/styles.css" rel="stylesheet">
  <script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <a href="#" class="btn btn-danger btn-block btn-compose-email" data-target="#exampleModal" data-toggle="modal">Register Student</a>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New Student</h4>
              </div>
              <div class="modal-body">


                <form  method="post">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Student ID:</label>
                    <input type="text" name="student_id" placeholder="student ID" required />
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">First Name:</label>
                    <input type="text" name="fname" placeholder="your first name" required />
                  </div>
                  <div class="form-group">
                    <label for="recipient-last-name" class="control-label">last Name:</label>
                  <input type="text" name="lname" placeholder="student last name" required />
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">ID Number:</label>
                    <input type="text" name="id_number" placeholder="ID Number" required />
                  </div>

                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="submit_data">Add New Student</button>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
        <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
          <li >
            <a href="teacher.php?c=dashboard">
              <i class="fa fa-dashboard"></i>Dashboard
            </a>
          </li>
          <li>
            <a href="teacher.php?c=inbox">
              <i class="fa fa-inbox"></i> Inbox <span class="label label-info pull-right inbox-notification">3</span>
            </a>
          </li>
          <li>
            <a href="teacher.php?c=send-mail"><i class="fa fa-envelope-o"></i> Send Mail</a>
          </li>
          <li>
            <a href="teacher.php?c=student-feedback"><i class="fa fa-certificate"></i>Student Feedback</a>
          </li>
          <li>
            <a href="teacher.php?c=calendar">
              <i class="fa fa-file-text-o"></i> Calendar
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
            <a href="logout.php?logout=logout">
              <i class="fa fa-lock"></i> Sign Out
            </a>
          </li>
        </ul>
        <!-- /.nav -->
      </div>
      <div class="col-sm-9">

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
                    <li class="list-group-item">trainers ID:<i class="fa fa-key"></i> <?php echo $trainers_id; ?></li>
                    <li class="list-group-item">user name:<i class="fa fa-user"></i> <?php echo $uname; ?></li>
                    <li class="list-group-item">email:<i class="fa fa-envelope"></i>  <?php echo $email; ?> </li>
                    <li class="list-group-item">phone:<i class="fa fa-phone"></i>  07191702 </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <?php
              $content = $_GET['c'];
              if($content=='inbox'){
                include 'inbox.php';
              }elseif ($content=='student-feedback') {
                include 'student-feedback.php';
              }elseif ($content=='calendar') {
                include 'calendar.php';
              }elseif ($content=='send-mail') {
                include 'send-mail.php';
              } else{
                include 'dashboard.php';
              }
             ?>
          </div>
					<div class="logout">

					</div>



      </div>
      <!-- resume -->
    </div>
  </div>
  <script src="http://code.jquery.com/jquery.js"></script>
  <script>
  window.jQuery || document.write('<script src="js/jquery-3.1.1.js"><\/script>')
  </script>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Custom JS -->
  <script src="js/script.js"></script>
  <link href='css/fullcalendar.min.css' rel='stylesheet' />
  <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src='js/moment.min.js'></script>
  <script src='js/fullcalendar.min.js'></script>
</body>

</html>
