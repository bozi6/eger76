<?php namespace App\Libraries;
class karszMenu
{
	/** Fenti menüsor
	 * @param number  Melyik oldalon vagyunk
	 * @return string  A menü html-t adja Visszaadja
	 */
	public function show_menu($hol)
	{
		$nyelv = $_SESSION['site_lang'];
		$gomb = '<a class ="btn btn-success mr-2"';
		$gombdis = '<a class ="btn btn-success mr-2 disabled" ';
		$menu = array(
			'kezd' => '<div class="row d-print-none" id="mymenu"><div class="col-sm-12 text-center p-3">',
			'1' => $gomb . ' href="' . base_url() . '"><span class="fas fa-home"> ' . lang('Menu.menuKezd', [], $nyelv) . '</span></a>',
			'2' => $gomb . ' href="' . base_url('kezd/kiaz') . '"><span class="fas fa-sign-in-alt"> ' . lang('Menu.menuBelep') . '</span></a>',
			'3' => $gomb . ' href="' . base_url('kezd/csoportos') . '"><span class="fas fa-users"> ' . lang('Menu.menuCsop') . '</span></a>',
			'4' => $gomb . ' href="' . base_url('kezd/stat') . '"><span class="fas fa-globe-europe"> ' . lang('Menu.menuOssz') . '</span></a>',
			'5' => $gomb . ' href="' . base_url('kezd/rogton') . '"><span class="fas fa-ticket-alt"> ' . lang('Menu.menuNow') . '</span></a>',
			'veg' => '</div></div>',
		);
		$menu[$hol] = ltrim($menu[$hol], '<a ' . $gomb);
		$menu[$hol] = $gombdis . $menu[$hol];
		return implode("\n", $menu);
	}
}
