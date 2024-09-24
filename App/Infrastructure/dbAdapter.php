<?php
	require_once 'App/Infrastructure/sdbhInterface.php';

	class dbAdapter implements sdbhInterface
	{

		private $sdbh;

		public function __construct($sdbh)
		{
			$this->sdbh = $sdbh;
		}

		public function make_query($query, $reconnect = false)
		{
			return $this->sdbh->make_query($query, $reconnect);
		}

		public function mselect_rows(
			$tbl_name,
			$select_array,
			$from, $amount,
			$order_by,
			$order = Null,
			$deadlock_up = False,
			$lock_mode = Null
		)
		{
			return $this->sdbh->mselect_rows($tbl_name, $select_array, $from, $amount, $order_by, $order, $deadlock_up, $lock_mode);
		}

	}

?>