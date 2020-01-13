<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Langsw extends Controller
{
    /*
    *  Megpróbálunk nyelvet váltani ezzel a kontrollerrel
    * 
    * @param A bejövő nyelv kódja (hu,en,de,ar)
    * @return Visszairányít a küldő oldalra.
    */
    function swl($lang)
    {
    $session = \Config\Services::Session();
	//$lang = ($lang != "") ? $lang : "hu";
	$session->set('site_lang',$lang);
	    return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}