<h3>List of Trainers</h3>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Id Number</th>
			<th>Gender</th>
			<th>Educarion</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$get_traines = mysql_query("SELECT * FROM trainers_reg");
			if (mysql_num_rows($get_traines) > 0) {
		
				while ($row = mysql_fetch_assoc($get_traines)) {
					$t_fname = $row['fname'];
					$t_lname = $row['lname'];
					$t_idnum = $row['id_number'];
					$t_gender = $row['gender'];
					$t_level = $row['education_level'];

					echo "<tr>
								<td>$t_fname</td>
								<td>$t_lname</td>
								<td>$t_idnum</td>
								<td>$t_gender</td>
								<td>$t_level</td>
						</tr>";
				}				
			}
		?>
	</tbody>
</table>