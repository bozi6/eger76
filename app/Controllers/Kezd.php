<?php namespace App\Controllers;

use App\Models\karModell;
use App\Libraries\karszMenu;


class Kezd extends BaseController
{
    /**
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
                'mind' => $model->getMind(),
                'stat' => ['benne' => 'nagyon'],
                'cim' => lang('Kezd.kezdHomepage'),
                'nyelv' => $_SESSION['site_lang'],
                'okos' => $this->okos(),
            ];

        helper('form');
        echo view('sablonok/header.php', $data);
        echo view('sablonok/logo.php', $data);
        echo view('/kezd/karszalag', $data);
        echo view('sablonok/footer.php', $data);
    }

    /**
     *  Nyelv választás változtató fv. Átírja a session változóban a kiválasztott nyelvet
     * ennyi.
     * @var $mi string nyelvet választotta a paraszt.
     * @return null redirect
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
     * @return null
     *
     * TODO Eddig belpettek tablazat paginationt kellen.
     */
    public function kiaz()
    {
        helper('form');
        $model = new karModell();
        $menu = new karszMenu();
        $data =
            [
                'menu' => $menu->show_menu(2),
                'kik' => $model->getKik(),
                'stat' => ['benne' => 'nagyon'],
                'cim' => lang('Kiaz.kiazHomepage'),
                'nyelv' => $_SESSION['site_lang'],
                'okos' => $this->okos(),
            ];
        echo view('sablonok/header.php', $data);
        echo view('sablonok/logo.php', $data);
        echo view('/kezd/kiaz', $data);
        echo view('sablonok/footer.php', $data);
    }

    /**
     * Csoportos beléptetés lehetővé tévő dolgok összesége
     * @return null
     */
    //TODO Csoportos belépés oldalalkat megcsinálni
    public function csoportos()
    {
        $model = new karModell();
        $menu = new karszMenu();
        $data =
            [
                'menu' => $menu->show_menu(3),
                'mind' => $model->getMind(),
                'stat' => ['benne' => 'nagyon'],
                'cim' => lang('Csoport.csopHomepage'),
                'nyelv' => $_SESSION['site_lang'],
                'okos' => $this->okos(),
            ];
        echo view('sablonok/header.php', $data);
        echo view('sablonok/logo.php', $data);
        echo view('/kezd/csoport', $data);
        echo view('sablonok/footer.php', $data);
    }

    /**
     * Különböző statisztikák összegyűjtése,
     * hogy az Egér is boldog legyen.
     *
     * @return null
     */
    //TODO Kiegészíteni mindenféle érdekességekkel.
    public function stat()
    {
        $model = new karModell();
        $menu = new karszMenu();
        $data =
            [
                'menu' => $menu->show_menu(4),
                'belepettek' => $model->belCount(),
                'mindenki' => $model->mindCount(),
                'cim' => lang('Stat.statHomepage'),
                'nyelv' => $_SESSION['site_lang'],
                'okos' => $this->okos(),
                'nembe' => $model->mindCount() - $model->belCount(),
                'cegek' => $model->getEgyKik(),
            ];
        echo view('sablonok/header.php', $data);
        echo view('sablonok/logo.php', $data);
        echo view('/kezd/stat', $data);
        echo view('sablonok/footer.php', $data);

    }

    /**
     * eddig.php ben az eddig belépett tagok listázása
     * @return string
     */

    public function getEddig()
    {
        $request = \Config\Services::request();
        $model = new karModell();
        $nev = $request->getVar('nev');
        $result = $model->get_belepok($nev);

        if (count($result) > 0) {
            $i = 1;
            foreach ($result as $row) {
                $arr_result[] = array(
                    'id' => $i,
                    'nev' => $row->nev,
                    'ceg' => $row->ceg,
                    'belepett' => $row->miko,
                    'megjegyzes' => $row->megjegyzes,
                );
                $i++;
            }
            echo json_encode($arr_result);
        }
    }

    /**
     *
     * @term a get kérésből
     * @return string formázott lekérdezés MySQLből
     *
     * Ha beírunk valakit akkor ez hívodik meg a kitöltésre.
     * A keres.js fileból hivatkozunk rá.
     */

    public function getAutocomplete()
    {
        $model = new karModell();
        if (isset($_GET['term'])) {
            $result = $model->kereses($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row) {
                    if ($row->belepett == 1) {
                        $igen = 'Belépett: ' . $row->miko;
                    } else {
                        $igen = 'Nincs beléptetve.';
                    };
                    $arr_result[] = array(
                        'sorsz' => $row->sorsz,
                        'label' => $row->nev,
                        'szul_datum' => $row->szul_datum,
                        'cegnev' => $row->cegnev,
                        'besorolas' => $row->besorolas,
                        'programresz' => $row->programresz,
                        'megjegyzes' => $row->megjegyzes,
                        'szdarab' => $row->szdarab,
                        'gyszdarab' => $row->gyszdarab,
                        'belepett' => $igen);
                };
                echo json_encode($arr_result);
                // itt küldtük vissza a cuccokat JSONként
            }
        }
    }
    
    /**
     * A belépés gomb a kezdőoldalon.
     * @param  number  POST('sorsz') A belépő sorszáma
     * @param  number  POST('befiz') Vett felnőttjegy száma
     * @param  number  POST('gybefiz') Vett gyerekjegy száma
     * @param  number  POST('megjegy') Megjegyzés
     */
    public function belepes()
    {
        helper('url');
        $model = new karModell();
        $sorsz = $this->request->getPost('sorsz');
        $befiz = $this->request->getPost('befiz');
        $gybefiz = $this->request->getPost('gybefiz');
        $megjegy = $this->request->getPost('megjegy');
        $res = $model->belepett($sorsz, $befiz, $gybefiz, $megjegy);
        if ($res == true) {
            return redirect()->to('/');
        //Visszairányít a kezdőoldalra, minden egyéb info nélkül.
        } else die('Nem sikerült a belépés...');
    }
    
    //--------------------------------------------------------------------
}    
