<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('Volvo', 22, 18, 'Putih Abu')
			, array('BMW', 15, 13, 'Biru')
			, array('Saab', 5, 2, 'Silver')
			, array('Land Rover', 17, 25, 'Putih')
			, array('Nissan', 13, 15, 'Hitam')
		);

		return $cars;
	}
}	