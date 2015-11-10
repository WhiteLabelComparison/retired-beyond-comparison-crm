<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class BillingInvoicePaid extends Model
{

    public $timestamp = false;

    protected $dates = [
        'date_paid',
    ];

    protected $primaryKey = 'id';

    protected $table = 'billing_invoice_paid';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'inv_number',
        'amount',
        'date_paid',
        'add_billing',
    ];

}