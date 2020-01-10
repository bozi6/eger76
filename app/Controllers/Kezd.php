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
        $session = session();
		echo view('sablonok/header.php');
        echo view('/kezd/karszalag',$data);
        echo view('sablonok/footer.php');
	}

	//--------------------------------------------------------------------

}
