<?php
	class Mammals{
		public $hasFur;
		public $eats;
		public $warmBlooded;
		public $fourLegs;
		public $laysEggs;
		// public $Platiypus;
		// public $echidna;

		 function __construct($hasFur,$eats,$warmBlooded){
			$this->hasFur = $hasFur;
			$this->eats = $eats;
			$this->warmBlooded = $warmBlooded;
			 $this->fourLegs = $fourLegs;
			 $this->laysEggs = $laysEggs;
			// $this->Platiypus = $platypus;
			// $this->echidna = $echidna;

		}
 
		function mammalion(){
			return"mammals " . $this->hasFur . "mammals also" . $this->fourLegs;
		}
	}
	class Platiypus extends Mammals{
		function mammalion2(){
			return $this->laysEggs;
		}
	}

	class Echidna extends Mammals{
		function __construct($hasFur,$eats,$warmBlooded,$fourLegs,$laysEggs);
		parent:: __construct($hasFur,$eats,$warBlooded,$fourLegs,$laysEggs);
		$this->fourLegs = $fourLegs;
	}
}
$echidna = new Echidna("Echidna","eats","warmBlooded","fourLegs","laysEggs");
print "Mammal 1 is a" . $echidna->mammalion();
?>