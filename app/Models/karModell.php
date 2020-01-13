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

    /**
     * @return belepett emberkek
     * A belepett embereket listázza ki.
     */
    public function getKik()
    {
        $query = $this->query('SELECT * FROM belepettek');
        return $query->getResult();
    }

    /**
     * @return data visszaadása
     */
    public function stat()
    {
        $query = $this->query('SELECT count(*) FROM belepettek');
        $data =
            [
            'belepett' => $query->getResult(),
            ];
        return $data;
    }

}
