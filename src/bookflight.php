<?php

	$from = $_POST['from'];
	$to = $_POST['to'];

		if($from == 'SJC' && $to =='BOS')
		{

			echo 'Flight booked. flag{mnxplewkirazsiroixnq}';
		}
		else
		{
			echo 'This is not correct. Please check spelling and make sure it is all uppercase.';
		}


?>