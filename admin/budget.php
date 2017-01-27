<?php
	
	if (isset($_POST['budget'])) {
		$period = mysql_escape_string($_POST['period']);
		$goal = mysql_escape_string($_POST['goal']);
		$expense = mysql_escape_string($_POST['expense']);
		$exstudent = mysql_escape_string($_POST['exstudent']);

		$stu_pay = (($goal + $expense)/$exstudent);
		$save = mysql_query("INSERT INTO budget(period,budget_goal,av_expense,expected_students,student_pay)
				values('$period','$goal','$expense','$exstudent','$stu_pay')");
	}

?>

<h2>Budget</h2>

<div class="row">
<!-- calculation column -->
<div class="col-sm-12 col-sm-6 forms" >
	<form id="form" action="" method="post">
		<!-- group for calculating goal -->
		<div class="form-group">
			<label for="period">Period</label>
			<select name="period" class="form-control" id="period">
				<option value="Apr - May">Apr - May</option>
				<option value="Aug - Sept">Aug - Spt</option>
				<option value="Nov - DEc">Nov - Dec</option>
			</select>
		</div>
		<div class="form-group">
			<label for="goal">Goal</label>
			<input type="number" class="form-control" placeholder="Enter your desired income goal ie.50000" id="goal" required="" autofocus="autofocus" name="goal">
		</div>
		<!-- group for calculating expense -->
		
		<div class="form-group">
			
			<label>Total average Expenses</label>
			<input type="number" id="id_1" placeholder="Expense amount" name="expense" required="You cant leave this" class="form-control">
		
		</div>
		<!-- group for fee -->

		<div class="form-group">
			<label>Expected students</label>
			<input type="number" class="form-control" name="exstudent" placeholder="Numbers of expected students" required="" id="fee">
		</div>
		<button class="btn btn-lg btn-primary submit" name="budget">Submit</button>
	</form>
</div>
<div class="clearfix"></div>

<div class="col-sm-12 col-md-6 budget" id="budget-hide">

	<h2>Current Budget</h2>
	<table class="table">
		<tr>
			<th class="halfT1">Budget</th>
			<th class="halfT2">Amount</th>
		</tr>
		<tr>
			<td>Administrator Goal</td>
			<td class="outGoal"></td>
		</tr>
		<tr>
			<td>Average Expenses Amount</td>
			<td class="outExpense"></td>
		</tr>
		<tr>
			<td>Number of Expected Students</td>
			<td class="outStudent"></td>
		</tr>
			<hr>
		<tr>
			<th>Optimum fee</th>
			<td>Ksh: <span class="outTotal"></span></td>
		</tr>
	</table>
	<button class="btn btn-default show">Update budget</button>
</div>
</div>