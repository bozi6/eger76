<?php namespace App\Controllers;
use App\Models\karModell;
use App\Libraries\karszMenu;

class Kezd extends BaseController
{
    /*
     * A Kezd Controller konstructora
     * Ellenőrzi a session nyelv változót ha nincs akkor magyar lesz az oldal.
     * 
     * @return null
     */
    public function __construct()
    {
    	$session = \Config\Services::session();
    }
    /**
     * 
     * Kezdőoldal megjelenítése + ha nyelvet választunk akkor az is.
     * 
     * @ return null
     */
    public function index()
    {
        $model = new karModell();
        $menu = new karszMenu();
        $data =
            [
                'menu' => $menu->show_menu(1),
                'mind'  => $model->getMind(),
                'stat' => ['benne' => 'nagyon'],
                'cim' => lang('Kezd.kezdHomepage'),
                'nyelv' => $_SESSION['site_lang'],
                'okos'  => $this->okos(),
            ];

        helper('form');
        echo view('sablonok/header.php',$data);
        echo view('sablonok/logo.php',$data);
        echo view('/kezd/karszalag', $data);
        echo view('sablonok/footer.php',$data);
    }
    
    /**
    *  Nyelv választás változtató fv. Átírja a session változóban a kiválasztott nyelvet
    * ennyi.
    * @mi melyik nyelvet választotta a paraszt.
    */
    public function ls($mi)
    {
        $_SESSION['site_lang'] = $mi;
        $honnan = $this->request->getServer('HTTP_REFERER');
        return redirect()->to($honnan);
    }

    /**
     * Random bölcsességek kimeríthetelen tárháza. :-)
     *
     * @return string  A  fileból egy véletlen sor
     */
    public function okos()
    {
        helper('file');
        $f_contents = file('./assets/fortune.txt');
        $line = $f_contents[array_rand($f_contents)];
        return $line;
    }

    /**
     * Eddig belépett emberkék listázása
     */
    public function kiaz()
    {
        $model = new karModell();
        $menu = new karszMenu();
        $data =
            [
                'menu' => $menu->show_menu(2),
                'kik'  => $model->getKik(),
                'stat' => ['benne' => 'nagyon'],
                'cim' => lang('Kiaz.kiazHomepage'),
                'nyelv' => $_SESSION['site_lang'],
                'okos'  => $this->okos(),
            ];
        echo view('sablonok/header.php',$data);
        echo view('sablonok/logo.php',$data);
        echo view('/kezd/kiaz', $data);
        echo view('sablonok/footer.php',$data);
    }

    /**
     * Csoportos beléptetés lehetővé tévő dolgok összesége
     */
    public function csoportos()
    {
        $model = new karModell();
        $menu = new karszMenu();
        $data =
            [
                'menu' => $menu->show_menu(3),
                'mind'  => $model->getMind(),
                'stat' => ['benne' => 'nagyon'],
                'cim' => lang('Csoport.csopHomepage'),
                'nyelv' => $_SESSION['site_lang'],
                'okos'  => $this->okos(),
            ];
        echo view('sablonok/header.php',$data);
        echo view('sablonok/logo.php',$data);
        echo view('/kezd/csoport', $data);
        echo view('sablonok/footer.php',$data);
    }

    /**
     * Különböző statisztikák összegyűjtése,
     * hogy az Egér is boldog legyen.
     */
    public function stat()
    {
        $model = new karModell();
        $menu = new karszMenu();
        $data =
            [
                'menu' => $menu->show_menu(4),
                'mind'  => $model->getMind(),
                'stat' => ['benne' => 'nagyon'],
                'cim' => lang('Stat.statHomepage'),
                'nyelv' => $_SESSION['site_lang'],
                'okos'  => $this->okos(),
            ];
        echo view('sablonok/header.php',$data);
        echo view('sablonok/logo.php',$data);
        echo view('/kezd/stat', $data);
        echo view('sablonok/footer.php',$data);

    }
    //--------------------------------------------------------------------
}    
