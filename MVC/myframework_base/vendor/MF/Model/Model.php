<?php

namespace MF\Model;

abstract class Model {

	protected $db;

	public function __construct($db) {
		$this->db = $db;
	}

}

?>