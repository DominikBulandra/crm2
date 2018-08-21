<?php 
class Cms5b7bd02e83790738458617_cbe0a207209569962d36378ce5599576Class extends Cms\Classes\PartialCode
{
public function onStart() { $this->prepareVars();
}
public function prepareVars() {
    $this['value'] = Session::get('data');
  
    }
}
