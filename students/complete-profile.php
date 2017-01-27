<?php
session_start();

if (!$_SESSION['student']) {
    header('location: http://127.0.0.1/hacktoteach/index.php');
    exit();
}

$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$natid = $_SESSION['id_number'];

?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Website Title & Description for Search Engine purposes -->
        <title>Students || Landing Page</title>
        <meta name="description" content="">
        <!-- Mobile viewport optimized -->
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
        <form class="form" action="actions/register.php" method="post" id="first-form">
            <h4>Complete Profile</h4>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" name="fname" readonly value="<?php echo $fname;?>">
            </div>
            <div class="form-group">
                <label for="lname" class="control-label">last Name:</label>
                <input type="text" class="form-control" id="lname" name="lname" readonly  value="<?php echo $lname;?>">
            </div>
            <div class="form-group">
                <label for="natid" class="control-label">ID Number:</label>
                <input type="number" class="form-control" id="natid" name="id_number"  value="<?php echo $natid;?>" readonly>
            </div>
            <div class="form-group">
                <label for="phone" class="control-label">Phone Num:</label>
                <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone">
            </div>
            <div class="form-group">
                <label for="dob" class="control-label">D.O.B:</label>
                <input type="date" class="form-control" name="dob" id="dob">
            </div>
            <div class="form-group">
                <label for="gender" class="control-label">Gender:</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <hr>

            <div class="form-group">
                <label for="uname" class="control-label">User Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="User Name" name="uname">
            </div>
             <div class="form-group">
                <label for="eduleve" class="control-label">Edu Level:</label>
                <input type="text" class="form-control" id="eduleve" name="education_level" placeholder="Education Level">
            </div>
            <hr>

             <div class="form-group">
                <label for="pass" class="control-label">Password:</label>
                <input type="Password" class="form-control" id="pass" placeholder="New Password" name="pass">
            </div>
            <div class="form-group">
                <label for="pass2" class="control-label">Confirm Password:</label>
                <input type="Password" class="form-control" id="pass2" name="pass2" placeholder="Education Level">
            </div>
            <input type="submit" value="Submit Edits" name="submit" class="btn btn-primary">
        </form>
    </body>
</html>