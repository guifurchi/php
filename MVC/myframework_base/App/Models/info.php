<?php

namespace App\Models;

use MF\Model\Model;

class info extends Model{

	public function getInfo() {
		
		$query = "select titulo, descricao from tb_info";
		return $this->db->query($query)->fetchAll();
	}
}

?>