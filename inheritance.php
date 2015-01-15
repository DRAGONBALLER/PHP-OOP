<?php
	class mammals{
		public $hasFur;
		public $eats;
		public $warmBlooded;
		// public $fourLegs;
		// public $laysEggs;

		 function__construct($hasFur,$eats,$warmBlooded){
			$this->hasFur = $hasFur;
			$this->eats = $eats;
			$this->warmBlooded = $warmBlooded;
			// $this->fourLegs = $fourLegs;
			// $this->laysEggs = $laysEggs;


		}
 
		function mammalion(){
			return"mammals " . $this->hasFur . "mammals also" . $this->fourLegs;
		}
	}
	class platiypus extends mammals{
		function mammalion2(){
			return $this->laysEggs;
		}
	

?>