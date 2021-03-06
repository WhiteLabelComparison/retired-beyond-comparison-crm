<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class AffiliateBillingC extends Model
{

    public $timestamp = false;

    protected $primaryKey = 'id';

    protected $table = 'affiliates_billing_c';

    protected $connection = 'beyond-crm';

    protected $dates = [
        'ini_date',
        'end_date',
        'date_paid',
    ];

    protected $fillable = [
        'affiliate',
        'ini_date',
        'end_date',
        'commission',
        'accepted',
        'pperiod',
        'pending',
        'scrubbed',
        'total',
        'accepted_qty',
        'pending_qty',
        'scrubbed_qty',
        'ltype',
        'paid',
        'invoice',
        'date_paid',
    ];

}