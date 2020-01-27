<?php

namespace App\Controllers;

use App\Libraries\karszMenu;
use App\Libraries\okoska;
use App\Models\nowModell;
use Config\Services;

/**
 * Class Rogton
 * @package App\Controllers
 * Azonnali karszalagkéréseknek tesz eleget.
 */
class Rogton extends AlapController
{
	public function __construct()
	{
		$benchmark = Services::timer();
		$benchmark->getTimers(6);
		$benchmark->start('render view');
	}

	/**
	 * Ha hirtelen kell sok jegy, mert a főnök azt mondja akkor ez jön be.
	 *
	 */
	public function index()
	{
		$model = new nowModell();
		$menu = new karszMenu();
		$okos = new okoska();
		$data = [
			'menu' => $menu->show_menu(5),
			'nyelv' => $_SESSION['site_lang'],
			'okos' => $okos->okos(),
			'jsoldal' => 'rogton',
		];

		echo view('sablonok/header.php', $data);
		echo view('sablonok/logo.php', $data);
		echo view('/rogton/rogton', $data);
		echo view('sablonok/footer.php', $data);
	}
}
