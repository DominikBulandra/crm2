<?php 
class Cms5b7189ac1c55e717425295_989d1a149e08492bbfc9a525d438c32eClass extends Cms\Classes\PartialCode
{
public function onStart() { $this->prepareVars();
}
public function prepareVars() {
    $this['value'] = Session::get('data');
  
    }
}
