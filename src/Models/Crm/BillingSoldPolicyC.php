<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class BillingSoldPolicyC extends Model
{

    public $timestamp = false;

    protected $dates = [
        'ini_date',
        'end_date',
    ];

    protected $primaryKey = 'id';

    protected $table = 'billing_sold_policies_c';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'seller',
        'ini_date',
        'end_date',
        'affiliate',
        'qty_sold',
        'amount_sold',
        'live',
        'rated',
        'referred',
        'cancelled',
        'as_live',
        'as_rated',
        'as_referred',
        'as_cancelled',
    ];

}