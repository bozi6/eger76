<?php namespace App\Models;

use CodeIgniter\Model;

class KarModell extends Model
{
        protected $table = 'karszalagok';

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

    public function getKik()
    {
        $query = $this->query('SELECT * FROM belepettek');
        return $query->getResult();
    }

}
