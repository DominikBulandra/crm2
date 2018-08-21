<?php namespace Dominik\clients\Components;

use Cms\Classes\ComponentBase;
use dominik\deals\models\deals;
use DB;
use Response;
use Redirect;
use Input;
use Auth;
use View;
use Cookie;
use System\Classes\CombineAssets;
use Config;
use Cms\Classes\Page;
use dominik\projects\models\Apartments;
class All extends ComponentBase
{
   public function componentDetails() {
		return [
			'name' => 'Wszyscy klienci',
			'description' => 'Wyświetlanie listy Klientów',
		];
}
function onNewClick()
{
    return ['#myDiv2' => $this->renderPartial('clients/create')];
}
function onAllClick()
{
    return ['#myDiv2' => $this->renderPartial('clients/all')];
}

public function onRun() {
    $this->addJs('/themes/demo/assets/javascript/app.js');
     $this->addJs('/themes/demo/assets/javascript/datatables.js');
}
		
		
public static function onAll() {
    $clients=db::table('dominik_clients_client')
        ->select('*')
        ->get()     ;
        return $clients;
        
        
    }
	
public static function onMy() {
    $clients=db::table('dominik_clients_client')
        ->where('user_id', Auth::getUser()->id)
        ->select('*')
        ->get()     ;
        return $clients;
        
        
    }
        
}
