<?php
class tugas {
	public $bil1,$bil2;
	function set_nilai ($bilangan1,$bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	function get_nilai1(){
		return $this->bil1 + $this->bil2;
	}
	function get_nilai2(){
		return $this->bil1 - $this->bil2;
	}
	function get_nilai3(){
		return $this->bil1 * $this->bil2;
	}
	function get_nilai4(){
		return $this->bil1 / $this->bil2;
	}
}
$tugas1= new tugas;
$tugas1->set_nilai(6,12);
echo "hasil penjumlahan 6+12 = ".$tugas1->get_nilai1();
echo "hasil pengurangan 6-12 = ".$tugas1->get_nilai1();
echo "hasil perkalian 6*12 = ".$tugas1->get_nilai1();
echo "hasil pembagian 6/12 = ".$tugas1->get_nilai1();


?>