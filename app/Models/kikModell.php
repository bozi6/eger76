<?php namespace App\Models;

use CodeIgniter\Model;


class KikModell extends Model
{
	protected $table = 'belepettek';

	/**
	 * @return object belepett emberkek
	 * A belepett embereket listázza ki.
	 */
	public function getKik()
	{
		return $this->findAll();
	}
}
