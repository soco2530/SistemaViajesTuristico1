<?php

/**
 *
 */
class Database
{

	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "turismo");
		return $this->con;
	}
}

?>