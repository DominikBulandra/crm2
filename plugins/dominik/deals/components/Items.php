<?php namespace Dominik\deals\Components;

use Cms\Classes\ComponentBase;
use dominik\deals\models\deals;
use DB;
use Response;
use Redirect;
use Input;
use Auth;
use Carbon\Carbon;
use View;
use Cookie;
use System\Classes\CombineAssets;
use Config;
use Cms\Classes\Page;
use dominik\projects\models\Apartments;
class Items extends ComponentBase
{
   public function componentDetails() {
		return [
			'name' => 'lista',
			'description' => 'zawartość koszyka na stronie',
		];
}
//perzejscie do partiala tworzenia umowy
function onNextClick()
{
    return ['#darktable' => $this->renderPartial('deals/CreateReservation')];
}
//Tworzenie nowej umowy
public static function onReservationClick()
{
	$deals=db::table('dominik_deals_deal')
	->where('deal_type_id', '2')
        ->select('*')
        ->get()     ;
        return $deals;
}
public static function onDeveloperClick()
{
	$deals=db::table('dominik_deals_deal')
	->where('deal_type_id', '1')
        ->select('*')
        ->get()     ;
        return $deals;
}
function onDealCreate()
{
     Db::table('dominik_deals_deal')->insert(
    ['deal_type_id' => '2',
    'date' => Carbon::now(),
    'notarial' => '11/qqqq/2018', 
      'user_id' => Auth::getUser()->id,
    
 ]);
}

	public function onRun() {
		$this->addCss('/plugins/dominik/deals/assets/items.css');

		



		
		$users2 = Cookie::get();
		$basket = array();
		$keys = array_keys($users2);
		foreach ($keys as $key) {
			if (strpos($key, "basket")!== false) {
			// 	array_push($basket, $key);
				
			// }
				$delstr= substr($key, 6,5);
			array_push($basket, $delstr);}
		}
		$locals=Db::table('dominik_projects_places')->select('id','notation','price','staircases_id')->wherein('id', $basket)->get()->toArray();


		$this->page['items'] = $users2;
		$this->page['items2'] = $locals;
		
	}
	
    
}
