<!DOCTYPE html>
<html>

<head>
  <!-- Website Title & Description for Search Engine purposes -->
  <title>Trainer</title>
  <meta name="description" content="">
  <!-- Mobile viewport optimized -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/styles.css" rel="stylesheet">
  <!-- Include Modernizr in the head, before any other Javascript -->
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
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Student ID:</label>
                    <input type="text" class="form-control" name="student_id">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">First Name:</label>
                    <input type="text" class="form-control" name="fname">
                  </div>
                  <div class="form-group">
                    <label for="recipient-last-name" class="control-label">last Name:</label>
                    <input type="text" class="form-control" name="lname">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">ID Number:</label>
                    <input type="text" class="form-control" name="id_number">
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss='modal'>Add New Student</button>
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
            <a href="logout.php">
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
                    <li class="list-group-item">John Doe</li>
                    <li class="list-group-item">Trainer</li>
                    <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000 </li>
                    <li class="list-group-item"><i class="fa fa-envelope"></i> john@example.com</li>
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



      </div>
      <!-- resume -->
    </div>
  </div>
  <!-- All Javascript at the bottom of the page for faster page loading -->
  <!-- First try for the online version of jQuery-->
  <script src="http://code.jquery.com/jquery.js"></script>
  <!-- If no online access, fallback to our hardcoded version of jQuery -->
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
