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
        $query =  $this->query('SELECT * from karszalagok limit 2');
        $sor = $query->getResult();
        return $sor;
    }

    /**
     * @return $query belepett emberkek
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
     * @return $bel statisztikak visszaadása
     */
    public function belCount()
    {
        $bel = $this->db->table('belepettek')->countAll();
        return $bel;
    }
    
    /**
     * @return $bel statisztikak visszaadása
     */
    public function mindCount()
    {
        $bel = $this->db->table('mindenki')->countAll();
        return $bel;
    }

}
