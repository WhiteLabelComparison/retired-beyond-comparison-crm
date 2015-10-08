<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class BillingInvoiceSold extends Model
{

    public $timestamp = false;

    protected $dates = [
        'ini_date',
        'date_paid',
    ];

    protected $primaryKey = 'id';

    protected $table = 'billing_invoice_sold';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'buyer',
        'ini_date',
        'date_paid',
        'inv_number',
        'amount',
    ];

}