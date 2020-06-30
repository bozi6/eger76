<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tanchaz19 extends Migration
{
	public function up()
	{
		$this->forge->addField([
		'sorsz'	=> [
			'type'	=> 'INT',
			'constraint'	=> 11,
			'unsigned'	=> TRUE,
			'Auto_increment'	=> TRUE
			],
		'cegnev'=> [
		    'type'	=> 'VARCHAR',
		    'constraint'	=> 254],
		    ]);
		$this->forge->addKey('sorsz', TRUE);
		$this->forge->createTable('ceglista');
		
		$this->forge->addField("sorsz mediumint(8) UNSIGNED NOT NULL COMMENT 'sorszám'");
		$this->forge->addField("cegnev INT(5) NOT NULL COMMENT 'Belépő társulat neve'");
		$this->forge->addField("nev varchar(127) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'Belépő neve'");
		$this->forge->addField("szul_datum date NOT NULL COMMENT 'Belépő születési dátuma'");
		$this->forge->addField("besorolas varchar(127) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'Belépő besorolása'");
		$this->forge->addField("programresz varchar(127) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'Beépő melyik programrészben van'");
		$this->forge->addField("megjegyzes text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'Megjegyzés'");
		$this->forge->addField("belepett tinyint(1) NOT NULL COMMENT 'Átvette a karszalagot'");
		$this->forge->addField("miko datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Karszalag átvételének ideje'");
		$this->forge->addField("valtozas datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp() COMMENT 'frissitéskor időbélyeg'");
		$this->forge->addField("szdarab tiniint(2) DEFAULT NULL COMMENT 'Kért karszalagok száma'");
		$this->forge->addField("gyszdarab tiniint(2) DEFAULT NULL COMMENT 'Kért gyerek karszalagok száma'");
		$this->forge->addKey('sorsz', TRUE);
		$this->forge->createTable('karszalagok');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('ceglista');
		$this->forge->dropTable('karszalagok');
	}
}
