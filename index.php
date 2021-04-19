<?php

	class HTML_Helper{
		public function print_table(){ ?>
<?php		$users = array(
			array('user_num' => 1,'first_name' => 'Michael', 'last_name' => 'Choi', 'nickname' => 'Sensei'),
			array('user_num' => 2,'first_name' => 'Sean', 'last_name' => 'John', 'nickname' => 'Didds'),
			array('user_num' => 3,'first_name' => 'Mark', 'last_name' => 'Zuckerberg', 'nickname' => 'Guru'),
			array('user_num' => 4,'first_name' => 'Jin', 'last_name' => 'Ro', 'nickname' => 'Spirit'),
			array('user_num' => 5,'first_name' => 'Patrick', 'last_name' => 'Obra', 'nickname' => 'Pat'),
			array('user_num' => 6,'first_name' => 'Billy', 'last_name' => 'Corgan', 'nickname' => 'Smash')); ?>
			
		 <table>    
			<thead>
				<tr>
					<th>User #</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Nick Name</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($users as $key => $value) { ?>
				<tr class="plain_format">
					<td><?= $users[$key]['user_num']; ?></td>
					<td><?= $users[$key]['first_name']; ?></td>
					<td><?= $users[$key]['last_name']; ?></td>
					<td><?= $users[$key]['nickname']; ?></td>

				</tr>
			<?php } ?>
			</tbody>
		</table>
<?php		} 
		
		public function print_select(){ ?>
<?php	$sample_array = ['CA','WA','UT','TX','AZ','NY'];?>
			<select name="state"> 
				<option value="CA">CALIFORNIA</option>
				<option value="WA">WASHINGTON</option>
				<option value="UT">UTAH</option>
				<option value="TX">TEXAS</option> 
				<option value="AZ">ARIZONA</option>
				<option value="NY">NEW YORK</option> 
			</select> 
			
<?php		} 
	}
	
	$print_me = new HTML_Helper;
	$print_me->print_table();

	$select_me = new HTML_Helper;
	$select_me->print_select('state', $sample_array);
?>