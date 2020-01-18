<?php

namespace App\Controllers;

use App\Models\karModell;
use App\Models\kikModell;
use App\Libraries\karszMenu;
use CodeIgniter\HTTP\RedirectResponse;
use Config\Services;
use http\Env\Response;

class Kezd extends BaseController
{

	/**
	 * A Kezd Controller konstructora
	 * Ellenőrzi a session nyelv változót ha nincs akkor magyar lesz az oldal.
	 *
	 * @param
	 *            null
	 * @return string
	 */
	public function __construct()
	{
//		$session = Services::session();
		$benchmark = Services::timer();
		$benchmark->start('render view');
	}

	/**
	 *
	 * Kezdőoldal megjelenítése + ha nyelvet választunk akkor az is.
	 *
	 * @return null
	 */
	public function index()
	{
		$model = new karModell();
		$menu = new karszMenu();
		$data = [
			'menu' 		=> $menu->show_menu(1),
			'stat' 		=> $model->belCount(),
			'cim' 		=> lang('Kezd.kezdHomepage'),
			'nyelv' 	=> $_SESSION['site_lang'],
			'okos' 		=> $this->okos(),
			'jsoldal'	=> 'karszalag'
		];
		helper('form');
		echo view('sablonok/header.php', $data);
		echo view('sablonok/logo.php', $data);
		echo view('/kezd/karszalag', $data);
		echo view('sablonok/footer.php', $data);
	}

	/**
	 * Random bölcsességek kimeríthetelen tárháza.
	 * :-)
	 *
	 * @return string A fileból egy véletlen sort add vissza.
	 */
	public function okos()
	{
		helper('file');
		$f_contents = file('./assets/fortune.txt');
		return $f_contents[array_rand($f_contents)];
	}

	/**
	 * Nyelv választás változtató fv.
	 * Átírja a session változóban a kiválasztott nyelvet
	 * ennyi.
	 *
	 * @return null redirect
	 * @var $mi string nyelvet választotta a paraszt.
	 */
	public function ls($mi)
	{
		$_SESSION['site_lang'] = $mi;
		$honnan = $this->request->getServer('HTTP_REFERER');
		return redirect()->to($honnan);
	}

	/**
	 * Eddig belépett emberkék listázása
	 *
	 * @return null TODO Eddig belpettek tablazat paginationt kellene.
	 */
	public function kiaz()
	{
		helper('form');
		$model = new kikModell();
		$menu = new karszMenu();
		$data = [
			'menu' 		=> $menu->show_menu(2),
			'kik'		=> $model->paginate(20,'gr1'), // a paginationhoz hogy betöltődjön a saját template meg kell adni egy groupot
			'pager'		=> $model->pager,
			'cim'		=> lang('Kiaz.kiazHomepage'),
			'nyelv'		=> $_SESSION['site_lang'],
			'okos'		=> $this->okos(),
			'jsoldal'	=> 'kiaz',
		];
		echo view('sablonok/header.php', $data);
		echo view('sablonok/logo.php', $data);
		echo view('/kezd/kiaz', $data);
		echo view('sablonok/footer.php', $data);
	}

	/**
	 * Csoportos beléptetés lehetővé tévő dolgok összesége
	 *
	 * @return null
	 */
	public function csoportos()
	{
		$model = new karModell();
		$menu = new karszMenu();
		$data = [
			'menu' 		=> 	$menu->show_menu(3),
			'csoplist' 	=> 	$model->csoplist(),
			'cim' 		=> 	lang('Csoport.csopHomepage'),
			'nyelv' 	=> 	$_SESSION['site_lang'],
			'okos' 		=> 	$this->okos(),
			'jsoldal'	=>	'csoport',
		];
		echo view('sablonok/header.php', $data);
		echo view('sablonok/logo.php', $data);
		echo view('/kezd/csoport', $data);
		echo view('sablonok/footer.php', $data);
	}

	/**
	 * Csoport belépés frissítése a kiválasztott checkboxok alapján.
	 * @param Response POST('fellepo') a csportszámhoz tartozó fellépők
	 * @return RedirectResponse
	 */
	public function csopupdt()
	{
		$model = new karModell();
		$request = Services::request();
		$fellepo = $request->getPost('fellepo');
		$model->csoptagbelep( $fellepo);
		return redirect()->to('/kezd/csoportos');
	}

	/**
	 * Csoport lista változásakor
	 * Feltölti a lista elemeit. a
	 * csoport szonosítójából a nevekkel
	 * @param  number POST('csid)
	 * @return string JSON fromázott válasz
	 *         jQuery<-keres.js
	 */
	public function csopval()
	{
		$request = Services::request();
		$nev = $request->getPost('csid'); // a csid a csoport azonosító amit megkaptunk a keres.js fileból.
		$model = new karModell();
		$res = $model->csopresz($nev);
		if (count($res) > 0) {
			return json_encode($res);
		}
	}

	/**
	 * A megadott csoportot belépteti
	 * @param number $num a belépő csoport száma
	 * @return RedirectResponse
	 * Visszairányít az érkező oldalara
	 */
	public function csopbel($num)
	{
		$model = new karModell();
		$res = $model->csopbelepes($num);
		if($res = true){
			return redirect()->to('/kezd/csoportos');
		}
	}


	/**
	 * Különböző statisztikák összegyűjtése,
	 * hogy az Egér is boldog legyen.
	 *
	 * @return null
	 */
	// TODO Kiegészíteni mindenféle érdekességekkel.
	/**
	 * TODO a statisztikakanak egy külön táblát csinálni view be amiben benne van az összes emberke,
	 * TODO az össes belépett , a hátralévő belépők a jegyek száma ( felnőtt/gyerek) meg a karszalag szinek szerinti hülyeségei
	 */
	public function stat()
	{
		$model = new karModell();
		$menu = new karszMenu();
		$data = [
			'menu' 			=> $menu->show_menu(4),
			'belepettek' 		=> $model->belCount(),
			'mindenki' 		=> $model->mindCount(),
			'dupla' 		=> $model->dupla(),
			'cim' 			=> lang('Stat.statHomepage'),
			'nyelv' 		=> $_SESSION['site_lang'],
			'okos' 			=> $this->okos(),
			'nembe' 		=> $model->mindCount() - $model->belCount(),
			'cegek' 		=> $model->getKik(),
			'jsoldal'		=>	'stat',
		];
		echo view('sablonok/header.php', $data);
		echo view('sablonok/logo.php', $data);
		echo view('/kezd/stat', $data);
		echo view('sablonok/footer.php', $data);
	}

	/**
	 * eddig.php ben az eddig belépett tagok listázása
	 *
	 * @return string
	 */
	public function getEddig()
	{
		$request = Services::request();
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
					'megjegyzes' => $row->megjegyzes
				);
				$i++;
			}
			echo json_encode($arr_result);
		}
	}

	/**
	 *
	 * @return void formázott lekérdezés MySQLből
	 *
	 *         Ha beírunk valakit akkor ez hívodik meg a kitöltésre.
	 *         A keres.js fileból hivatkozunk rá.
	 */
	// TODO átnézni az array -> string konverziót lehet úgy gyorsab lesz.
	public function getAutocomplete()
	{
		$model = new karModell();
		if (isset($_GET['term'])) {
			$result = $model->kereses($_GET['term']);
			if (count($result) > 0) {
				foreach ($result as $row) {
					if ($row['belepett'] == 1) {
						$row = array_replace($row,array('belepett' => 'Belépett: ' . $row['miko']));
					} else {
						$row = array_replace($row, array('belepett' => 'Nincs belépve'));
						//$igen = 'Nincs beléptetve.';
					}
					$arr_result[] = $row;
				}
				echo json_encode($arr_result);
				// itt küldtük vissza a cuccokat JSONként
			}
		}
	}

	/**
	 * A belépés gomb a kezdőoldalon.
	 *
	 * @param number POST('sorsz') A belépő sorszáma
	 * @param number POST('befiz') Vett felnőttjegy száma
	 * @param number POST('gybefiz') Vett gyerekjegy száma
	 * @param number POST('megjegy') Megjegyzés
	 * @return RedirectResponse
	 */
	public function belepes()
	{
		helper('url');
		$bel = $this->request->getPost('belepett');
		if($bel === 'Nincs belépve') {
			$model = new karModell();
			$sorsz = $this->request->getPost('sorsz');
			$befiz = $this->request->getPost('befiz');
			$gybefiz = $this->request->getPost('gybefiz');
			$megjegy = $this->request->getPost('megjegy');
			$res = $model->belepett($sorsz, $befiz, $gybefiz, $megjegy);
			if ($res == true) {
				return redirect()->to('/');
				// Visszairányít a kezdőoldalra, minden egyéb info nélkül.
			} else
				die('Nem sikerült a belépés...');
		}
		else{
			die('Már belépett a paraszt');
		}
	}
	// --------------------------------------------------------------------
}
