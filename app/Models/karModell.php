<?php namespace App\Models;

use CodeIgniter\Model;

class KarModell extends Model
{
    protected $table = 'belepettek';

    /**
     * Minden bejegyzés megjelenítése.
     *
     * @return null
     */
    public function getMind()
    {
        $query = $this->query('SELECT * from karszalagok limit 2');
        $sor = $query->getResult();
        return $sor;
    }

    /**
     * @return query belepett emberkek
     * A belepett embereket listázza ki.
     */
    public function getKik()
    {
        $query = $this->query('SELECT * FROM belepettek');
        return $query->getResult();
    }

    public function getEgyKik()
    {
        $builder = $this->db->table('belepettek')->select();
        $query = $builder->get();
        return $query->getResult();
    }

    /**
     * @return bel statisztikak visszaadása
     */
    public function belCount()
    {
        $bel = $this->db->table('belepettek')->countAll();
        return $bel;
    }

    /**
     * @return bel statisztikak visszaadása
     */
    public function mindCount()
    {
        $bel = $this->db->table('mindenki')->countAll();
        return $bel;
    }

    /**
     * a már belépettek között keresgél név szerint
     *
     * @param  string $mi a belepo neve
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
     * @param  string  névtöredék
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
}
