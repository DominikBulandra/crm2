<?php 
use dominik\deals\components\Items;class Cms5b7558d54582a336525445_c89335638a33546e80c79ea0ccf1f7cbClass extends Cms\Classes\PartialCode
{

public function onStart() { $this->prepareVars();
}
public function prepareVars(){
	$this['ev4'] = Items::onReservationClick();
		
	}
}
