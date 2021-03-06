<?php namespace Dominik\Deals\Models;

use Model;

/**
 * Model
 */
class Deals extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominik_deals_deal';

    public $belongsTo = [

    'dealt' =>[
            'dominik\deals\Models\deal_type',
            'table' => 'dominik_projects_deal_type',
            'order' =>      'name'

    ]
    ];
}
