<?php namespace App\Controllers;
class Kezd extends BaseController
{
	
    public function index()
	{   
        $data = 
        [
            'stat'  => [ 'benne' => 'nagyon'],
        ];
        $locale = service('request')->getLocale();
        helper('form');

	$this->session->set('site_lang','hu');
//	d($this->session);	// debuggolja a változót és továbbengedi a programot a dd pedig megöki ott ahol kell.
    	echo view('sablonok/header.php');
        echo view('/kezd/karszalag',$data);
        echo view('sablonok/footer.php');
	}

	//--------------------------------------------------------------------

}
