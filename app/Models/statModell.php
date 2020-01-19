<?php


namespace App\Models;

use CodeIgniter\Model;


class statModell extends Model
{
	protected $table = 'belepett';

	/**
	 * @return number A belépett táblában lévő emberkék számát adja meg.
	 */
	public function getBelCount()
	{
		return $this->countAllResults();
	}

	/**
	 * @return mixed statisztikak visszaadása
	 */
	public function mindCount()
	{
		$this->table = 'mindenki';
		return $this->db->table('mindenki')->countAll();
	}

	/**
	 * Dupla bejegyzések megjelenítése
	 *
	 * @param null bemenet nincs
	 * @return array a duplikált bejegyzések listája
	 */
	public function dupla()
	{
		$this->table = 'duplikalt';
		$bldr = $this->db->table('duplikalt')->get();
		return $bldr->getResult();
	}
}
