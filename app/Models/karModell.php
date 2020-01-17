<?php namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class KarModell extends Model
{
	/**
	 * Minden bejegyzés megjelenítése.
	 *
	 * @return null
	 */
	public function getMind()
	{
		$query = $this->db->query('SELECT * from karszalagok limit 2');
		$sor = $query->getResult();
		return $sor;
	}

	/**
	 * @return int|string belepett emberkek
	 * A belepett embereket listázza ki.
	 */
	public function getKik()
	{
		$db = Database::connect();
		$bldr = $db->table('belepettek');
		$bldr->select();
		return $bldr->get();
	}

	/**
	 * @return int|string statisztikak visszaadása
	 */
	public function belCount()
	{
		$bel = $this->db->table('belepettek')->countAll();
		return $bel;
	}

	/**
	 * @return mixed statisztikak visszaadása
	 */
	public function mindCount()
	{
		$bel = $this->db->table('mindenki')->countAll();
		return $bel;
	}

	/**
	 * a már belépettek között keresgél név szerint
	 *
	 * @param string $mi a belepo neve
	 * @return  array Visszaadja a belepett nepeket
	 */
	public function get_belepok($mi)
	{
		$builder = $this->db->table('belepettek')
			->like('nev', $mi)
			->orderBy('nev');
		$query = $builder->get();
		return $query->getResult();
	}

	/**
	 * Az autocomplete kereső lekérdezése a keres.js fileból
	 * @param string  névtöredék
	 * @return string  a névtöredéknek megfelelő nevek listája LIKE
	 */
	public function kereses($mit)
	{
		// "mindenki" a nézet(VIEW) neve a mysqlben.
		$builder = $this->db->table('mindenki')
			->like('nev', $mit)
			->orLike('cegnev', $mit)
			//$this->db->group_by('cegnev');
			->limit(7)
			->get();
		return $builder->getResult();
	}

	/**
	 * A csoportok nevenek és id jének lekérdezése
	 * @return string.
	 * a csoportos oldalon van használva.
	 */
	public function csoplist()
	{
		$bldr = $this->db->table('ceglista')
			->select('sorsz,cegnev')
			->orderBy('cegnev')
			->get();
		return $bldr->getResult();
	}

	/**
	 * a kiválasztott csoport szűrése egyénekre
	 * @param number  a cegnev sorszáma
	 * @return string  a number szerint szűrve
	 */
	public function csopresz($mit)
	{
		$bldr = $this->db->table('karszalagok')
			->select('sorsz,nev,cegnev,megjegyzes,szul_datum,besorolas,programresz,belepett,miko')
			->where('cegnev', $mit)
			->orderBy('nev')
			->get();
		return $bldr->getResultArray();
	}

	/** a kiválasztott csporttagot lépteti be
	 * @param array $kik
	 * @return boolean true ha a $kik tömbben vannak
	 * false ha nincsenek.
	 */
	public function csoptagbelep($kik)
	{
		if ($kik != null) {
			foreach ($kik as $row) {
				$this->db->table('karszalagok')
				->set('belepett', 1, false)
					->where('sorsz', $row)
					->update();
			}
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Beléptet / frissít.
	 * @param number $ki belepo sorszáma
	 * @param int $mennyit felnőttjegy száma
	 * @param int $gymennyit gyerekjegy száma
	 * @param string $megjegy megjegyzéshorray
	 * @return boolean TRUE ha minden fasza
	 */
	public function belepett($ki, $mennyit = 0, $gymennyit = 0, $megjegy)
	{
		$this->db->table('karszalagok')
			->set('szdarab', $mennyit, false)
			->set('gyszdarab', $gymennyit, false)
			->set('belepett', 1, false)
			->set('megjegyzes', $megjegy)
			->set('miko', date("Y-m-d H:i:s"))
			->where('sorsz', $ki)
			->update();
		return true;
	}

	/**
	 * Dupla bejegyzések megjelenítése
	 *
	 * @param null bemenet nincs
	 * @return array a duplikált bejegyzések listája
	 */
	public function dupla()
	{
		$bldr = $this->db->table('duplikalt')->get();
		return $bldr->getResult();
	}

	public function csopbelepes($num)
	{
		$this->db->table('karszalagok')
		->set('belepett', 1)
		->where('cegnev', $num)
		->update();
		return true;
	}
}
