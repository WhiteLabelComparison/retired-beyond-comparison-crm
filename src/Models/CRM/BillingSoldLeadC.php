<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class BillingInvoiceSoldC extends Model
{

    public $timestamp = false;

    protected $dates = [
        'ini_date',
        'end_date',
        'date_paid',
    ];

    protected $primaryKey = 'id';

    protected $table = 'billing_sold_leads_c';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'ini_date',
        'end_date',
        'affiliate',
        'buyer',
        'qty_sold',
        'lead_price',
        'invoice',
        'date_paid',
    ];

}