<?php
Class Ninja{
	public $name;
	public $tingkatan;
	public $tinggi;
	public $team;
	public $jutsu;


	public function perkenalan(){
		$html = "Halo...! Ijinkan saya memperkenalkan diri:<br />
				 Nama Saya $this->name<br />
				 Saya seorang $this->tingkatan :D<br />
				 Tinggi badan saya $this->tinggi<br />
				 Saya anggota team $this->team<br />
				 beberapa jutsu miliki : ".implode(', ', $this->jutsu)."<br /><br />
				 Sekian perkenalan dari saya, kurang lebihnya saya mohon maaf :)";
		return $html;
	}

	public function menyerang(){
		$html = "*ambil kuda-kuda<br />
				*Bersiaplah...! Saya akan mengeluarkan jutsu andalan saya, yaitu : ".$this->jutsu[array_rand($this->jutsu)]."<br />
				<br />

				*ciuuuuuuuuuuuuuuuuu <br />
				*dArRrRrRRRRRRRRR !!!!! kaboooorrrr...";
		return $html;
	}


}
?>