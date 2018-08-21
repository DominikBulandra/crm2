<?php 
use dominik\deals\components\Items;class Cms5b755d43cc5de968668496_9488f0953ff97666c373e5f54f6dd4c1Class extends Cms\Classes\PartialCode
{

public function onStart() { $this->prepareVars();
}
public function prepareVars(){
	$this['ev4'] = Items::onDeveloperClick();
		
	}
}
