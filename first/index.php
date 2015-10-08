<form method="get">
	Pilih Aksi 
	<select name="action">
		<option value="perkenalan">Perkenalan</option>
		<option value="menyerang">Menyerang</option>
	</select>
	<input type="submit">
</form>

<?php
if(@$_GET['action']!=null){
require "ninja.php";

$naruto = new Ninja();
$naruto->name 		= "Uzumaki Naruto";
$naruto->tingkatan	= "Genin";
$naruto->tinggi		= 166;
$naruto->team 		= 7;
$naruto->jutsu		= array(
							"Kage Bunsin No Jutsu",
							"Rasengan",
							"Kuciyose No Jutsu",
							"Rasenshuriken");
echo @$_GET['action']=="perkenalan" ? $naruto->perkenalan() : $naruto->menyerang();
}

?>