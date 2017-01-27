<h3>List of New Students</h3>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Id Number</th>
			<th>Gender</th>
			<th>Educarion</th>
			<th>Confirm</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$get_student = mysql_query("SELECT * FROM student_det");
			if (mysql_num_rows($get_student) > 0) {
		
				while ($row = mysql_fetch_assoc($get_student)) {
					$s_fname = $row['fname'];
					$s_lname = $row['lname'];
					$s_idnum = $row['id_number'];
					$s_gender = $row['gender'];
					$s_level = $row['ed_level'];

					echo "<tr>
							<td>$s_fname</td>
							<td>$s_lname</td>
							<td>$s_idnum</td>
							<td>$s_gender</td>
							<td>$s_level</td>
							<td><label class='label label-primary confirm'>Confrm</student></td>
						</tr>";
				}				
			}
		?>
	</tbody>
</table>