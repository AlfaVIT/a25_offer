
<?php

	interface sdbhInterface 
	{
		public function make_query($query, $reconnect = false);
		public function mselect_rows(
			$tbl_name,
			$select_array,
			$from, $amount,
			$order_by,
			$order = Null,
			$deadlock_up = False,
			$lock_mode = Null
		);

	}

?>