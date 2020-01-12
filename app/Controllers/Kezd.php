<?php namespace App\Controllers;
class Kezd extends BaseController
{
    public function __construct()
        /*
         * Ellenőrzi a session változó meglétét
         * ha nincs akkor magyar lesz alapból
         */
    {
        $session = \Config\Services::session();
        if(! $session->get('site_lang'));
        {
            $session->set('site_lang','hu');
        }
    }
    public function index()
    {
        $data =
            [
                'nyelv' => $_SESSION['site_lang'],
                'stat' => ['benne' => 'nagyon'],
                'cim' => lang('Kezd.kezdHomepage'),
            ];
        helper('form');
        echo view('sablonok/header.php',$data);
        echo view('sablonok/logo.php');
        echo view('/kezd/karszalag', $data);
        echo view('sablonok/footer.php');
    }
    
    public function ls($mi)
        /*
         *  Nyelv választás változtató fv. Átírja a session változóban a kiválasztott nyelvet
         * ennyi.
         */
    {
        $_SESSION['site_lang'] = $mi;
        $this->index();
    }
    //--------------------------------------------------------------------
}    
