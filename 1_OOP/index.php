<?php
/*
$date = new DateTime();
echo "<pre>".print_r(get_object_vars($date),2);
exit;
//print_r($date->format('H'));*/

class pendiDateTime extends DateTime
{
	public $format;
	public $tes;
	public $date;
	public $today;

	public function __construct($date=null)
	{
		$this->format = "d-M-Y H:i";
		$date==null?$this->date=date($this->format):$this->date=date($this->format,strtotime($date));
		return $this->date;
	}

	public function addDay($day){
		$date = date($this->format, strtotime($this->date."+$day days"));
		return $this->date = $date;
	}
	public function addHour($hour){
		$date = date($this->format, strtotime($this->date."+$hour hours"));
		return $this->date = $date;
	}
	public function addMinutes($minute){
		$date = date($this->format, strtotime($this->date."+$minute minutes"));
		return $this->date = $date;
	}
	public function hourRangeWith($date){
		// $date = $this->format("i");
		// echo $this->format('Y-m-d');
		// $date = $this->date;
		$date1 = explode(':',explode(' ',$this->date)[1])[0];
		$date2 = explode(':',explode(' ',$date)[1])[0];
		return $date1-$date2;


	}
	public function dayRangeWith($day){
		$date1 = explode('/',explode(' ',$this->date)[0])[1];
		$date2 = explode('/',explode(' ',$day)[0])[1];
		return $date1-$date2;
	}

}
$date = new pendiDateTime("2014/4/1 00:05");
echo $date->date."<br />";

$date->addDay(12); echo $date->date."<br />";
$date->addHour(3); echo $date->date."<br />";
$date->addMinutes(3); echo $date->date."<hr />";

echo "Selisih Jam = ".$date->hourRangeWith('2014/4/1 09:09');
echo "Selisih Hari = ".$date->dayRangeWith('2014/9/1 09:09');



?>