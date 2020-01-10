<?php namespace App\Controllers;
class Kezd extends BaseController
{
	
    public function index()
	{   
        
        $this->session->set('site_lang','hu');
        $data = 
        [
            'stat'  => [ 'benne' => 'nagyon'],
            'cim'   => lang('Kezd.kezdHomepage'),
        ];
        $locale = service('request')->getLocale();
        helper('form');
		echo view('sablonok/header.php');
        echo view('sablonok/logo.php');
        echo view('/kezd/karszalag',$data);
        echo view('sablonok/footer.php');
	}

	//--------------------------------------------------------------------

}
